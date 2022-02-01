<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\http\Controllers\ListController;
use App\Questionnaire;
use Monarobase\CountryList\CountryListFacade;
class ListController extends Controller
{
    function list()
    {
        
        $ml = Questionnaire::all();
        return view("senior_financing",compact('ml'));
    }
        //edituser
        function editlist($id)
        {
            $user = Questionnaire::find($id);
            $countries = CountryListFacade::getList('de');
            $borrowers_finance = preg_replace('/\s*,\s*/', ',', $user->borrowers_finance); 
            $borrowers_finance = explode(',', $borrowers_finance);
            $Germany_finance = preg_replace('/\s*,\s*/', ',', $user->Germany_finance); 
            $Germany_finance = explode(',', $Germany_finance);
            $project_developer_permit = preg_replace('/\s*,\s*/', ',', $user->project_developer_permit); 
            $project_developer_permit = explode(',', $project_developer_permit);
            $usage_financed = preg_replace('/\s*,\s*/', ',', $user->usage_financed); 
            $usage_financed = explode(',', $usage_financed);
            $usage_types_for_existing_properties = preg_replace('/\s*,\s*/', ',', $user->usage_types_for_existing_properties); 
            $usage_types_for_existing_properties = explode(',', $usage_types_for_existing_properties);
            $borrower_domiciled = preg_replace('/\s*,\s*/', ',', $user->borrower_domiciled); 
            $borrower_domiciled = explode(',', $borrower_domiciled);
            return view('senior_financinglist',compact('user','countries','borrowers_finance','Germany_finance','project_developer_permit','usage_financed','usage_types_for_existing_properties','borrower_domiciled'));
        }

        function update(Request $req)
        {
            $data =  Questionnaire::find($req->id);
            $data->name_of_bank=$req->name_of_bank;
            $data->website=$req->website;
            $data->borrowers_finance= empty($req->borrowers_finance) == false ? implode(',', $req->borrowers_finance) : "";
            $data->borrower_domiciled= empty($req->borrower_domiciled) == false ? implode(',', $req->borrower_domiciled) : "";
            $data->Germany_finance=empty($req->Germany_finance) == false ? implode(',', $req->Germany_finance) : "";
            $data->exactly=$req->exactly;
            $data->project_developer_permit=empty($req->project_developer_permit) == false ? implode(',', $req->project_developer_permit) : "";
            $data->usage_financed=empty($req->usage_financed) == false ? implode(',', $req->usage_financed) : "";
            $data->recourse=$req->recourse;
            $data->non_recourse=$req->non_recourse;
            $data->commercial_recourse=$req->commercial_recourse;
            $data->commercial_non_recourse=$req->commercial_non_recourse;
            $data->small_credit=$req->small_credit;
            $data->largest_credit=$req->largest_credit;
            $data->usage_types_for_existing_properties=empty($req->usage_types_for_existing_properties) == false ? implode(',', $req->usage_types_for_existing_properties) : "";
            $data->maximum_share_recourse=$req->maximum_share_recourse;
            $data->maximum_share_non_recourse=$req->maximum_share_non_recourse;
            $data->maximum_share_commercial_non_recourse=$req->maximum_share_commercial_non_recourse;
            $data->maximum_share_commercial_recourse=$req->maximum_share_commercial_recourse;
            $data->minimum_credit=$req->minimum_credit;
            $data->maximum_credit=$req->maximum_credit;
            $data->contact_person=$req->contact_person;
            $data->recourse_hold = $req->recourse_hold;
            $data->commercial_recourse_hold = $req->commercial_recourse_hold;
            $data->email=$req->email;
            $data->phone=$req->phone;
            $data->save();
            return redirect('/banks/senior_financing');
        }


        // delete
    
    public function deletelist(Request $request)
    {   
        $request = request();
        $data = $request->all();
        $id = $data['deleteid'];
        Questionnaire::destroy($id);
        return redirect()->back()->with("success", "Deleted Successfully.");
    }

    public function index($id)
    {
        $ml = Questionnaire::find($id);  

        return view('Senior_CRUD', compact('ml'));
    }
}

