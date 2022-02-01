<?php

namespace App\Imports;

use App\Questionnaire;
use App\City;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use GuzzleHttp;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

class QuestionnairesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row) {
        //   dd($row['regionaler_fokus_ihres_kreditinstituts']);
        // dd($row);
     
            if(isset($row['finanzierte_standorte_innerhalb_des_regionalen_fokus'])){
                $citywithRadius = preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']); 
                
                $citywithRadius = explode(',',$citywithRadius); 
                $apikey = config('services.google.apikey');
                $jsonarray = [];
                $cities = [];
                for($i = 0; $i < count($citywithRadius); $i++){
                    $city = preg_replace('/\(([^()]*+|(?R))*\)\s*/', '', $citywithRadius[$i]);
                    // $cities[] = $city;
                    if(isset($city) && $city != ''){    
                        $client = new Client();
                        $result =(string) $client->post("https://maps.googleapis.com/maps/api/geocode/json?address=".$city."&key=".$apikey)->getBody();
                        $json =json_decode($result);
                        // $jsonarray[] = $json;
                        if(isset($json->results[0])){
                            $lat =$json->results[0]->geometry->location->lat;
                            $lng =$json->results[0]->geometry->location->lng;
            
                            $cityExists = City::where('city', '=', $city)->first();
                            if ($cityExists === null) {
                                $questionnaire = new City;
                                $questionnaire->city= $city;
                                $questionnaire->lat= $lat;
                                $questionnaire->lng= $lng;
                                $questionnaire->save();
                            }
                        }
                    }
                }
                
                $recourse = preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_wohnen_recourse']);
                // echo "all";
                // echo $recourse;
                //  dd($row);
            }
            
            $recourse = preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_wohnen_recourse']);

            if(isset($row['id']) && !empty($row['id'])){
                $id = $row['id'];
                $questionnaire = Questionnaire::find($id);
                if(empty($questionnaire)){
                    return new Questionnaire([
                        'name_of_bank' => $row['name_des_kreditinstituts'],
                        'website' => $row['webseite_des_kreditinstituts'],
                        'borrowers_finance' => preg_replace('/\s*,\s*/', ',', $row['darlehensnehmer']),
                        'borrower_domiciled' => preg_replace('/\s*,\s*/', ',', $row['wohnort_des_darlehensnehmers']),
                        'Germany_finance' => preg_replace('/\s*,\s*/', ',', $row['regionaler_fokus_ihres_kreditinstituts']),
                        'exactly' => preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']),
                        'project_developer_permit' => preg_replace('/\s*,\s*/', ',', $row['baurechtstatus']),
                        'usage_financed' => preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_projektfinanzierung']),
                        'recourse' => floatval($recourse),
                        'non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_wohnen_non_recourse'])),
                        'commercial_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_gewerbe_recourse'])),
                        'commercial_non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_gewerbe_non_recourse'])),
                        'small_credit' => $row['minimales_finanzierungsvolumen_projektfinanzierung_eur'],
                        'largest_credit' => $row['maximales_finanzierungsvolumen_projektfinanzierung_eur'],
                        'usage_types_for_existing_properties' => preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_bestandsfinanzierung']),
                        'maximum_share_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_wohnen_recourse'])),
                        'maximum_share_non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_wohnen_non_recourse'])),
                        'maximum_share_commercial_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_gewerbe_recourse'])),
                        'maximum_share_commercial_non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_gewerbe_non_recourse'])),
                        'maximum_credit' => $row['maximales_finanzierungsvolumen_bestandsfinanzierung_eur'],
                        'minimum_credit' =>$row['minimales_finanzierungsvolumen_bestandsfinanzierung_eur'],
                        'recourse_hold' => floatval(preg_replace('/[^0-9]/', '', $row['neubau_fur_den_bestand_wohnen'])),
                        'commercial_recourse_hold' => floatval(preg_replace('/[^0-9]/', '', $row['neubau_fur_den_bestand_gewerbe'])),
                        'contact_person' => $row['ansprechpartner_fur_passende_erstanfragen'],
                        'email' => $row['email_adresse_fur_passende_erstanfragen'],
                        'phone' => $row['telefonnummer_fur_passende_erstanfragen'],
                    ]);
                }else{
                    $questionnaire->name_of_bank = $row['name_des_kreditinstituts'];
                    $questionnaire->website = $row['webseite_des_kreditinstituts'];
                    $questionnaire->borrowers_finance = preg_replace('/\s*,\s*/', ',', $row['darlehensnehmer']);
                    $questionnaire->borrower_domiciled = preg_replace('/\s*,\s*/', ',', $row['wohnort_des_darlehensnehmers']);
                    $questionnaire->Germany_finance = preg_replace('/\s*,\s*/', ',', $row['regionaler_fokus_ihres_kreditinstituts']);
                    $questionnaire->exactly = preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']);
                    $questionnaire->project_developer_permit = preg_replace('/\s*,\s*/', ',', $row['baurechtstatus']);
                    $questionnaire->usage_financed = preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_projektfinanzierung']);
                    $questionnaire->recourse = floatval($recourse);
                    $questionnaire->non_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_wohnen_non_recourse']));
                    $questionnaire->commercial_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_gewerbe_recourse']));
                    $questionnaire->commercial_non_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_gewerbe_non_recourse']));
                    $questionnaire->small_credit = $row['minimales_finanzierungsvolumen_projektfinanzierung_eur'];
                    $questionnaire->largest_credit = $row['maximales_finanzierungsvolumen_projektfinanzierung_eur'];
                    $questionnaire->usage_types_for_existing_properties = preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_bestandsfinanzierung']);
                    $questionnaire->maximum_share_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_wohnen_recourse']));
                    $questionnaire->maximum_share_non_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_wohnen_non_recourse']));
                    $questionnaire->maximum_share_commercial_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_gewerbe_recourse']));
                    $questionnaire->maximum_share_commercial_non_recourse = floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_gewerbe_non_recourse']));
                    $questionnaire->minimum_credit = $row['minimales_finanzierungsvolumen_bestandsfinanzierung_eur'];
                    $questionnaire->maximum_credit = $row['maximales_finanzierungsvolumen_bestandsfinanzierung_eur'];
                    $questionnaire->contact_person = $row['ansprechpartner_fur_passende_erstanfragen'];
                    $questionnaire->email = $row['email_adresse_fur_passende_erstanfragen'];
                    $questionnaire->phone = $row['telefonnummer_fur_passende_erstanfragen'];
                    $questionnaire->recourse_hold = floatval(preg_replace('/[^0-9]/', '', $row['neubau_fur_den_bestand_wohnen']));
                    $questionnaire->commercial_recourse_hold = floatval(preg_replace('/[^0-9]/', '', $row['neubau_fur_den_bestand_gewerbe']));
                    $questionnaire->save();
                    return null;
                }
            }

            return new Questionnaire([
                'name_of_bank' => $row['name_des_kreditinstituts'],
                'website' => $row['webseite_des_kreditinstituts'],
                'borrowers_finance' => preg_replace('/\s*,\s*/', ',', $row['darlehensnehmer']),
                'borrower_domiciled' => preg_replace('/\s*,\s*/', ',', $row['wohnort_des_darlehensnehmers']),
                'Germany_finance' => preg_replace('/\s*,\s*/', ',', $row['regionaler_fokus_ihres_kreditinstituts']),
                'exactly' => preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']),
                'project_developer_permit' => preg_replace('/\s*,\s*/', ',', $row['baurechtstatus']),
                'usage_financed' => preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_projektfinanzierung']),
                'recourse' => floatval($recourse),
                'non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_wohnen_non_recourse'])),
                'commercial_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_gewerbe_recourse'])),
                'commercial_non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_projektfinanzierung_gewerbe_non_recourse'])),
                'small_credit' => $row['minimales_finanzierungsvolumen_projektfinanzierung_eur'],
                'largest_credit' => $row['maximales_finanzierungsvolumen_projektfinanzierung_eur'],
                'usage_types_for_existing_properties' => preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_bestandsfinanzierung']),
                'maximum_share_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_wohnen_recourse'])),
                'maximum_share_non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_wohnen_non_recourse'])),
                'maximum_share_commercial_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_gewerbe_recourse'])),
                'maximum_share_commercial_non_recourse' => floatval(preg_replace('/[^0-9]/', '', $row['maximaler_beleihungsgrad_bestandsfinanzierung_gewerbe_non_recourse'])),
                'maximum_credit' => $row['maximales_finanzierungsvolumen_bestandsfinanzierung_eur'],
                'minimum_credit' =>$row['minimales_finanzierungsvolumen_bestandsfinanzierung_eur'],
                'recourse_hold' => floatval(preg_replace('/[^0-9]/', '', $row['neubau_fur_den_bestand_wohnen'])),
                'commercial_recourse_hold' => floatval(preg_replace('/[^0-9]/', '', $row['neubau_fur_den_bestand_gewerbe'])),
                'contact_person' => $row['ansprechpartner_fur_passende_erstanfragen'],
                'email' => $row['email_adresse_fur_passende_erstanfragen'],
                'phone' => $row['telefonnummer_fur_passende_erstanfragen'],
            ]);
      
    }
}
