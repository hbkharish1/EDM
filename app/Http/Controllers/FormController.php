<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use Validator;
use Redirect;
use App\Mezz;
use App\Questionnaire;
class FormController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function new_senior_financing()
{
$countries = CountryListFacade::getList('de');

return view('new_senior_financing', compact([ 'countries']));
}

// create
public function senior(Request $request)
{
    $data = $request->all();
    $rules = [
        'name_of_bank'  => 'required',
        'website'  => 'required',
        "borrowers_finance"  => 'required',
        'borrower_domiciled'  => 'required',
        'Germany_finance'  => 'required',
        'exactly'  => 'required',
        'project_developer_permit'  => 'required',
        'usage_financed'  => 'required',
        // 'recourse'  => 'required',
        'non_recourse'  => 'required',
        // 'commercial_recourse'  => 'required',
        'commercial_non_recourse' => 'required',
        'project_finance'  => 'required',
        // 'small_credit'  => 'required',
        // 'largest_credit'  => 'required',
        'usage_types_for_existing_properties'  => 'required',
        // "maximum_share_recourse"  => 'required',
        "maximum_share_non_recourse"  => 'required',
        'maximum_share_commercial_non_recourse'  => 'required',
        // 'maximum_share_commercial_recourse'  => 'required',
        'minimum_credit'  => 'required',
        'maximum_credit' => 'required',
        'contact_person'  => 'required',
        // 'recourse_hold' => 'required',
        // 'commercial_recourse_hold' => 'required',
        'email'  => 'required',
        'phone'  => 'required'
    ];

    // validator
    $input = $request->only(
        'name_of_bank',
        'website',
        "borrowers_finance",
        'borrower_domiciled',
        'Germany_finance',
        'exactly',
        'project_developer_permit',
        'usage_financed',
        // 'recourse',
        'non_recourse',
        // 'commercial_recourse',
        'commercial_non_recourse',
        'project_finance',
        // 'small_credit',
        // 'largest_credit',
        'usage_types_for_existing_properties',
        // "maximum_share_recourse",
        'maximum_share_non_recourse',
        'maximum_share_commercial_non_recourse',
        // 'maximum_share_commercial_recourse',
        'minimum_credit',
        'maximum_credit',
        'contact_person',
        'email',
        'phone'
    );

    $validator = Validator::make($input, $rules);
    if ($validator->fails()) {
        $validator->getMessageBag();    
        return Redirect::back()->withErrors($validator)->withInput();
    }
    // save function

    $matchlist = Questionnaire::create([
        'name_of_bank' => $data['name_of_bank'],
        'website' => $data['website'],
        'borrowers_finance' => empty($data['borrowers_finance']) == false ? implode(',', $data['borrowers_finance']) : "",
        'borrower_domiciled' => empty($data['borrower_domiciled']) == false ? implode(',', $data['borrower_domiciled']) : "",
        'Germany_finance' => empty( $data['Germany_finance']) == false ? implode(',', $data['Germany_finance']) : "",
        'exactly' => $data['exactly'],
        'project_developer_permit' => empty($data['project_developer_permit']) == false ? implode(',', $data['project_developer_permit']) : "",
        'usage_financed' => empty($data['usage_financed']) == false ? implode(',', $data['usage_financed']) : "",
        'recourse' => $data['recourse'],
        'non_recourse' => $data['non_recourse'],
        'commercial_recourse' => $data['commercial_recourse'],
        'commercial_non_recourse' => $data['commercial_non_recourse'],
        'project_finance' => $data['project_finance'],
        'small_credit' => $data['small_credit'],
        'largest_credit' => $data['largest_credit'],
        'usage_types_for_existing_properties' => empty($data['usage_types_for_existing_properties']) == false ? implode(',', $data['usage_types_for_existing_properties']) : "",
        'maximum_share_recourse' => $data['maximum_share_recourse'],
        'maximum_share_non_recourse' => $data['maximum_share_non_recourse'],
        'maximum_share_commercial_non_recourse' => $data['maximum_share_commercial_non_recourse'],
        // 'existing_credit' => $data['existing_credit'],
        'maximum_credit' => $data['maximum_credit'],
        'maximum_share_commercial_recourse' => $data['maximum_share_commercial_recourse'],
        // 'Minimum_Credit_1' => $data['Minimum_Credit_1'],
        'Minimum_Credit_2' => $data['Minimum_Credit_2'],
        'contact_person' => $data['contact_person'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'recourse_hold' => $data['recourse_hold'],
        'commercial_recourse_hold' => $data['commercial_recourse_hold'],
    ]);

    return redirect()->back()->with("success"," Created Successfully.");

}
// public function store(Request $request)
// {
// $match = new match;
// $thish->validate($request,[
// 'body'=>'required|uniqued:players',
// ]);

// }

public function new_Mezz_financing()
{
$countries = CountryListFacade::getList('de');

return view('new_mezzanine_financing', compact(['countries']));
}

// create
    public function MezzCreate(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name'  => 'required',
            'website'  => 'required',
            'borrower_domiciled'  => 'required',
            'Germany_finance'  => 'required',
            'project_developer_permit'  => 'required',
            'exactly'  => 'required',
            'usage_financed'  => 'required',
            'borrower_have_to_have_himself'  => 'required',
            'borrower_provide'  => 'required',
            'minimum_credit_volume'  => 'required',
            'maximum_credit_volume'  => 'required',
            'maximum_credit_duration'  => 'required',
            'contact_person'  => 'required',
            'email'  => 'required',
            'phone'  => 'required',
            'track_record'  => 'required',
        ];

        // validator
        $input = $request->only(
            'bank_name',
            'bank_website',
            'borrower_domiciled',
            'Germany_finance',
            'project_developer_permit',
            'exactly',
            'usage_financed',
            'borrower_have_to_have_himself',
            'borrower_provide',
            'minimum_credit_volume',
            'maximum_credit_volume',
            'maximum_credit_duration',
            'contact_person',
            'email',
            'phone',
            'track_record',
        ); 
        
        
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $validator->getMessageBag();    
            return Redirect::back()->withErrors($validator)->withInput();
        }
    // save function

        $matchlist = Mezz::create([

        'name' => $data['name'],
        'website' => $data['website'],
        'borrower_domiciled' => empty($data['borrower_domiciled']) == false ? implode(',', $data['borrower_domiciled']) : "",
        'Germany_finance' => empty($data['Germany_finance']) == false ? implode(',', $data['Germany_finance']) : "",
        'project_developer_permit' => empty($data['project_developer_permit']) == false ? implode(',', $data['project_developer_permit']) : "",
        'exactly' => $data['exactly'],
        'usage_financed' => empty($data['usage_financed']) == false ? implode(',', $data['usage_financed']) : "",
        'borrower_have_to_have_himself' => $data['borrower_have_to_have_himself'],
        'borrower_provide' => $data['borrower_provide'],
        'minimum_credit_volume' => $data['minimum_credit_volume'],
        'maximum_credit_volume' => $data['maximum_credit_volume'],
        'maximum_credit_duration' => $data['maximum_credit_duration'],
        'contact_person' => $data['contact_person'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'track_record' => $data['track_record']
        ]);

        return redirect()->back()->with("success"," Created Successfully.");

    }

}