<?php

namespace App\Http\Controllers;
use App\Mezz;
use App\User;
use App\Search;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserViewers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index($id)
    {
        $mezzanine = Mezz::find($id);  

        return view('Mezz_CRUD', compact('mezzanine'));
    }

    public function settings()
    { 
        $user = auth()->user();
        return view('settings',compact('user'));
    }

    public function savechanges(Request $req)
    { 
        $user = auth()->user();
        $user->firstname=$req->firstname;
        $user->lastname=$req->lastname;
        $user->phone_number=$req->phone_number;
        $user->email=$req->email;
        $req->validate([
            'image' => 'required|mimes:jpg,jpeg,png,gif,bitmap|max:2048',
        ]);
        $fileName = time().'.'.$req->image->extension();  
        $req->image->move(public_path('images'), $fileName);
        $user->profile_photo_path=$fileName;
        $user->save();
        return redirect('/settings');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mezzanine = Mezz::all();  
        
        return view('mezzanine_financing', compact('mezzanine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function MezzEdit($id)
    {
        $mezzanine = Mezz::find($id); 
        $countries = CountryListFacade::getList('de');
        $project_developer_permit=explode(',', $mezzanine->project_developer_permit);
        $usage_financed=explode(',', $mezzanine->usage_financed);
        $Germany_finance=explode(',', $mezzanine->Germany_finance);
        //dd($usage_financed);
        $borrower_domiciled = explode(',', $mezzanine->borrower_domiciled);

        return view('/mezzanine_financinglist', compact('mezzanine','countries','project_developer_permit','usage_financed','Germany_finance', 'borrower_domiciled'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $Usersname = User::all();  
        
        return view('users', compact('Usersname')); 

    }

    public function show_view($id)
    {
        
        $Username = User::find($id);  
        return view('users_view', compact('Username')); 

    }

    public function search()
    {
        
        $Usersname = Search::all();  
        
        return view('search-history', compact('Usersname')); 

    }

    public function search_view($id)
    {
        
        $Username = Search::find($id);  
        return view('search-history_view', compact('Username')); 

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function update(Request $req)
    {
        $data =  Mezz::find($req->id);
        $data->name=$req->name;
        $data->website=$req->website;
        $data->borrower_domiciled=empty($req->borrower_domiciled) == false ? implode(',', $req->borrower_domiciled) : ""; 
        $data->Germany_finance=empty($req->Germany_finance) == false ? implode(',', $req->Germany_finance) : "";
        $data->exactly=$req->exactly;
        $data->project_developer_permit=empty($req->project_developer_permit) == false ? implode(',', $req->project_developer_permit) : "";
        $data->usage_financed=empty($req->usage_financed) == false ? implode(',', $req->usage_financed) : "";
        //$data->borrower_have_to_have_himself=$req->borrower_have_to_have_himself;
        $data->profile_photo_path=$req->profile_photo_path;
        $data->borrower_provide=$req->borrower_provide;
        $data->minimum_credit_volume=$req->minimum_credit_volume;
        $data->maximum_credit_volume=$req->maximum_credit_volume;
        $data->maximum_credit_duration=$req->maximum_credit_duration;
        $data->contact_person=$req->contact_person;
        $data->track_record=$req->track_record;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->created_at=$req->created_at;
        $data->updated_at=$req->updated_at;
        $data->save();
        return redirect('/banks/mezzanine_financing');
    }
    public function login(Request $request){

        $validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6'
        ]);
        
        if (Auth::attempt($validator)) {
            return view('index');
        }else{
            return redirect()->back()->with('error', 'Email or password is incorrect')->withInput();
        }
        
    }

    public function updatepassword(Request $request){
        $validator = Validator::make($request->all(), [
            'newpassword' => 'required|string',
            'confirmpassword' => 'required|string',
        ]);

        if ($validator->fails()) {
            $validator->getMessageBag();    
            return Redirect::back()->withErrors($validator);
        }

        // if (!(Hash::check($request->get('currentpassword'), Auth::user()->password))) {
        //     // The passwords matches
        //     return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        // }

        if($request->get('newpassword') != $request->get('confirmpassword')){
            return redirect()->back()->with("error","Confirmed password didn't match with new password.");
        }

        if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('newpassword'));
        
        if($user->save()){
            return redirect()->back()->with("success","Password changed successfully !");
        }else{
            return redirect()->back()->with("error","Something went wrong, please try again");
        }


        return view('index');
        // $validator = $request->validate([
        //     'email'     => 'required',
        //     'password'  => 'required|min:6'
        // ]);
        
        // if (Auth::attempt($validator)) {
        //     return view('index');
        // }else{
        //     echo "hai this is the page";
        //     return redirect()->back()->with('error', 'Email or password is incorrect')->withInput();
        // }

    }

    public function loginPage()
    {
       return view('page-login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
    
        // $request->session()->regenerateToken();
    
        return redirect('login');
    }
}
