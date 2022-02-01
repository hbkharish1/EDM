<?php

namespace App\Imports;

use App\Mezz;
use App\City;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use GuzzleHttp;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use DB;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class MezzImport implements ToModel,WithHeadingRow,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row) {
        // if(isset($row['id']) && !empty($row['id'])){
        //     $mezz = Mezz::find($row['id']);
        //     if()
        //     echo $mezz->id;
        //     // if($mezz){
        //     //     dd($mezz);
        //     // }
        // }else{
        //     echo $row['eigenkapital'];
        //     dd($row);
        // }
        // echo $row['track_record'];
        //     dd($row);

            $citywithRadiuss = [];
            if(isset($row['finanzierte_standorte_innerhalb_des_regionalen_fokus'])){
                $citywithRadius = preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']); 
                // $citywithRadiuss[] = $citywithRadius;
                $citywithRadius = explode(',',$citywithRadius); 
                $citywithRadiuss[] = $citywithRadius;
                $apikey = config('services.google.apikey');
                $jsonarray = [];
                $cities = [];
                for($i = 0; $i < count($citywithRadius); $i++){
                    $city = preg_replace('/\(([^()]*+|(?R))*\)\s*/', '', $citywithRadius[$i]);
                    // $citywithRadiuss[] = $city;
                    if(isset($city) && $city != ''){    
                        $client = new Client();
                        $result =(string) $client->post("https://maps.googleapis.com/maps/api/geocode/json?address=".$city."&key=".$apikey)->getBody();
                        
                        $json =json_decode($result);
                        // $results[] = $json;

                        if(isset($json->results[0])){
                            $lat =$json->results[0]->geometry->location->lat;
                            $lng =$json->results[0]->geometry->location->lng;
            
                            $cityExists = City::where('city', '=', $city)->first();
                            if ($cityExists === null) {
                                $newcity = new City;
                                $newcity->city= $city;
                                $newcity->lat= $lat;
                                $newcity->lng= $lng;
                                $newcity->save();
                            } 
                        }   
                    }
                }
            }
            
            if(isset($row['id']) && !empty($row['id'])){
                $id = $row['id'];
                $mezz = Mezz::find($id);
                if(empty($mezz)){
                    return new Mezz([
                        'name' => $row['name_des_kreditinstituts'],
                        'website' => $row['webseite_des_kreditinstituts'],
                        'borrower_domiciled' => preg_replace('/\s*,\s*/', ',', $row['standort_des_darlehensnehmers']),
                        'Germany_finance' => preg_replace('/\s*,\s*/', ',', $row['regionaler_fokus_ihres_kreditinstituts']),
                        'exactly' => preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']),
                        'project_developer_permit' => preg_replace('/\s*,\s*/', ',', $row['baurechtstatus']),
                        'usage_financed' => preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_projektfinanzierung']),
                        'borrower_have_to_have_himself' => floatval(preg_replace('/[^0-9]/', '', $row['eigenkapital'])),
                        'borrower_provide' => preg_replace('/\s*,\s*/', ',', $row['sicherheiten']),
                        'minimum_credit_volume' => $row['minimales_finanzierungsvolumen_eur'],
                        'maximum_credit_volume' => $row['maximales_finanzierungsvolumen_eur'],
                        'maximum_credit_duration' => $row['maximale_darlehenslaufzeit_in_monaten'],
                        'contact_person' => $row['ansprechpartner_fur_passende_erstanfragen'],
                        'email' => $row['email_adresse_fur_passende_erstanfragen'],
                        'phone' => $row['telefonnummer_fur_passende_erstanfragen'],
                        'track_record' => $row['track_record']
                    ]);
                }else{
                    $mezz->name = $row['name_des_kreditinstituts'];
                    $mezz->website = $row['webseite_des_kreditinstituts'];
                    $mezz->borrower_domiciled = preg_replace('/\s*,\s*/', ',', $row['standort_des_darlehensnehmers']);
                    $mezz->Germany_finance = preg_replace('/\s*,\s*/', ',', $row['regionaler_fokus_ihres_kreditinstituts']);
                    $mezz->exactly = preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']);
                    $mezz->project_developer_permit = preg_replace('/\s*,\s*/', ',', $row['baurechtstatus']);
                    $mezz->usage_financed = preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_projektfinanzierung']);
                    $mezz->borrower_have_to_have_himself = floatval(preg_replace('/[^0-9]/', '', $row['eigenkapital']));
                    $mezz->borrower_provide = preg_replace('/\s*,\s*/', ',', $row['sicherheiten']);
                    $mezz->minimum_credit_volume = $row['minimales_finanzierungsvolumen_eur'];
                    $mezz->maximum_credit_volume = $row['maximales_finanzierungsvolumen_eur'];
                    $mezz->maximum_credit_duration = $row['maximale_darlehenslaufzeit_in_monaten'];
                    $mezz->contact_person = $row['ansprechpartner_fur_passende_erstanfragen'];
                    $mezz->email = $row['email_adresse_fur_passende_erstanfragen'];
                    $mezz->phone = $row['telefonnummer_fur_passende_erstanfragen'];
                    $mezz->track_record = $row['track_record'];
                    $mezz->save();
                    return null;
                }
            }

            if($row['track_record'] && $row['track_record'] != ''){
                if($row['track_record'] == '0'){
                    $row['track_record'] = "zero";
                }else if($row['track_record'] == '1 - 5' || $row['track_record'] == '1-5'){
                    $row['track_record'] = "onetofive";
                }else if($row['track_record'] == '6 - 20' || $row['track_record'] == '6-20'){
                    $row['track_record'] = "sixtotwenty";
                }else{
                    $row['track_record'] = "twenty";
                }
            }
            if(floatval(preg_replace('/[^0-9]/', '', $row['eigenkapital'])) == 0 || floatval(preg_replace('/[^0-9]/', '', $row['eigenkapital'])) == "0" || floatval(preg_replace('/[^0-9]/', '', $row['eigenkapital'])) == null){
                $borrower_have_to_have_himself = 0;
            }else{
                $borrower_have_to_have_himself = floatval(preg_replace('/[^0-9]/', '', $row['eigenkapital']));
            }
            
            // dd($results);
            return new Mezz([
                'name' => $row['name_des_kreditinstituts'],
                'website' => $row['webseite_des_kreditinstituts'],
                'borrower_domiciled' => preg_replace('/\s*,\s*/', ',', $row['standort_des_darlehensnehmers']),
                'Germany_finance' => preg_replace('/\s*,\s*/', ',', $row['regionaler_fokus_ihres_kreditinstituts']),
                'exactly' => preg_replace('/\s*,\s*/', ',', $row['finanzierte_standorte_innerhalb_des_regionalen_fokus']),
                'project_developer_permit' => preg_replace('/\s*,\s*/', ',', $row['baurechtstatus']),
                'usage_financed' => preg_replace('/\s*,\s*/', ',', $row['nutzungsarten_bei_projektfinanzierung']),
                'borrower_have_to_have_himself' => $borrower_have_to_have_himself,
                'borrower_provide' => preg_replace('/\s*,\s*/', ',', $row['sicherheiten']),
                'minimum_credit_volume' => $row['minimales_finanzierungsvolumen_eur'],
                'maximum_credit_volume' => $row['maximales_finanzierungsvolumen_eur'],
                'maximum_credit_duration' => $row['maximale_darlehenslaufzeit_in_monaten'],
                // 'duration' => $row['duration'],
                'contact_person' => $row['ansprechpartner_fur_passende_erstanfragen'],
                'email' => $row['email_adresse_fur_passende_erstanfragen'],
                'phone' => $row['telefonnummer_fur_passende_erstanfragen'],
                'track_record' => $row['track_record']
            ]);
      
    }

    public function chunkSize(): int
    {
        return 500;
    }
}
