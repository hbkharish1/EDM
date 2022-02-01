<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MezzTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mezz_questionnaire')->insert([[
            'name' => 'Exporo',
            'website' => 'https://www.exporo.immo/',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'alle',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'borrower_have_to_have_himself' =>  '5',
            'borrower_provide' => '',
            'minimum_credit_volume' => '750000',
            'maximum_credit_volume' => '10000000',
            'maximum_credit_duration' => '36',
            'phone' => '040 / 21 09 17 320',
            'track_record' =>'0'
        ],
        [
            'name' => 'Zinsbaustein',
            'website' => 'https://www.zinsbaustein.de/so-funktionierts/projekt-partner',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'alle',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'borrower_have_to_have_himself' =>  '5',
            'borrower_provide' => '',
            'minimum_credit_volume' => '1000000',
            'maximum_credit_volume' => '6000000',
            'maximum_credit_duration' => '60',
            'phone' => '030 3465570-49',
            'track_record' =>'0'
            
        ],
        [
            'name' => 'Bergfürst',
            'website' => 'https://de.bergfuerst.com/finanzieren',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'alle',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'borrower_have_to_have_himself' =>  '5',
            'borrower_provide' => '',
            'minimum_credit_volume' => '1000000',
            'maximum_credit_volume' => '6000000',
            'maximum_credit_duration' => '60',
            'phone' => ' ',
            'track_record' =>'0'
            
        ],
        [
            'name' => 'DBCFinance',
            'website' => 'http://www.dbc-finance.de/mezzanine.html',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'Süddeutschland, Berlin, Hamburg, Köln, Düsseldorf, Frankfurt am Main und Hannover',
            'project_developer_permit'=> 'Ab Bebauungsplan / § 34 BauGB',
            'usage_financed' => 'Wohnen',
            'borrower_have_to_have_himself' =>  '0',
            'borrower_provide' => 'Grundschuld, werthaltige Bürgschaft',
            'minimum_credit_volume' => '1000000',
            'maximum_credit_volume' => '6000000',
            'maximum_credit_duration' => '36',
            'phone' => '08920603130',
            'track_record' =>'0'
            
        ],

        [
            'name' => 'Linus Finance'   ,
            'website' => 'https://www.linus-finance.com/financing',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'Bestandsobjekte und Projektentwicklungen in A- und B-Städten der DACH-Region',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Logistik,Betreiberimmobilien',
            'borrower_have_to_have_himself' =>  '5',
            'borrower_provide' => '',
            'minimum_credit_volume' => '3000000',
            'maximum_credit_volume' => '100000000',
            'maximum_credit_duration' => '60',
            'phone' => '+49 (0) 30 629 3968 10',
            'track_record' =>'5-jan'
            
        ],
        [
            'name' => 'EV Digital Invest',
            'website' => 'https://www.ev-digitalinvest.de/',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'Ballungsräume',
            'project_developer_permit'=> 'Ab Bebauungsplan / § 34 BauGB',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'borrower_have_to_have_himself' =>  '5',
            'borrower_provide' => '',
            'minimum_credit_volume' => '1000000',
            'maximum_credit_volume' => '50000000',
            'maximum_credit_duration' => '48',
            'phone' => '030 403691550',
            'track_record' =>'1-5'
            
        ],
        [
            'name' => 'iFunded',
            'website' => 'https://ifunded.de/de/projektentwickler',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance' => 'Bundesweit',
            'exactly'=>'alles',
            'project_developer_permit'=> 'Ab Bebauungsplan / § 34 BauGB',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'borrower_have_to_have_himself' =>  '5',
            'borrower_provide' => '',
            'minimum_credit_volume' => '500000',
            'maximum_credit_volume' => '6000000',
            'maximum_credit_duration' => '48',
            'phone' => '+49 30 555 728 550',
            'track_record' =>'0'
            
        ],
        ]
    );
    }
}
