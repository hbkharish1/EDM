<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaire')->insert(
             
            // 3
           [ 
            [
                'name_of_bank' => 'Berliner Sparkasse im Test',
                'website' => 'www.teststparkasse.de',
                'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
                'borrower_domiciled' => 'Deutschland,Europäische Union,Test,außer test,Test und Test',
                'Germany_finance'=>'Rhein-Main-Gebiet',
                'exactly'=>'alles',
                'project_developer_permit'=> 'Ab Bebauungsplan / § 34 BauGB',
                'usage_financed' => 'Wohnen,Büro,Weitere',
                'recourse' =>  '90',
                'non-recourse' => '90',
                'commercial_recourse' => '90',
                'commercial_non_recourse' => '90',
                'recourse_hold' => '90',
                'commercial_recourse_hold' => '90',
                'small_credit'=>'10000000',
                'largest_credit' => '5000000',
                'usage_types_for_existing_properties' => 'Gleich wie "Projektfinanzierung",Büro,Logistik,Produktion',
                'maximum_share_recourse' => '80',
                'maximum_share_non_recourse' => '80',
                'maximum_share_commercial_non_recourse' => '60',
                'maximum_share_commercial_recourse' => '80',
                'minimum_credit' => '70',
                'maximum_credit' => '1000000',
                'contact_person' => 'Heinz Müllerwowitsch',
                'email' => 'heinz@müllerowtisch.tv',
                'phone' => '0049800696969'
            ],

    //    4
        [
            'name_of_bank' => 'Berliner Sparkasse im Test',
            'website' => 'saadw',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => '',
            'Germany_finance'=>'',
            'exactly'=>'',
            'project_developer_permit'=> '',
            'usage_financed' => '',
            'recourse' =>  '0',
            'non-recourse' => '0',
            'commercial_recourse' => '0',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'0',
            'largest_credit' => '0',
            'usage_types_for_existing_properties' => 'Gleich wie "Projektfinanzierung"',
            'maximum_share_recourse' =>'70',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '70',
            'maximum_share_commercial_recourse' => '70',
            'minimum_credit' => '80',
            'maximum_credit' => '5',
            'contact_person' => '',
            'email' => '',
            'phone' => ''
        ],

        // 5
        [
            'name_of_bank' => 'Berliner Sparkasse im Test',
            'website' => '',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Deutschland,Europäische Union',
            'Germany_finance'=>'Regional am Standort des Instituts',
            'exactly'=>'',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere',
            'recourse' =>  '90',
            'non-recourse' => '90',       
            'commercial_recourse' => '90',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'100000',
            'largest_credit' => '50000000',
            'usage_types_for_existing_properties' => 'Gleich wie "Projektfinanzierung"',
            'maximum_share_recourse' =>'90',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '90',
            'maximum_share_commercial_recourse' => '90',
            'minimum_credit' => '90',
            'maximum_credit' => '50000000',
            'contact_person' => '',
            'email' => '',
            'phone' => ''
        ],

    //    6
       [
            'name_of_bank' => 'Airbus Bank',
            'website' => 'https://www.airbusbank.com/de/real-estate',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Deutschland,Europäische Union',
            'Germany_finance'=>' Ballungsräumen München, Ingolstadt, Augsburg, Stuttgart, Nürnberg, Fürth, Erlangen sowie in Jena und Erfurt.',
            'exactly'=>'Angenommen: Alles',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere',
            'recourse' =>  '90',
            'non-recourse' => '90',
            'commercial_recourse' => '90',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'400000',
            'largest_credit' => '50000000',
            'usage_types_for_existing_properties' => 'Gleich wie "Projektfinanzierung"',
            'maximum_share_recourse' =>'80',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '80',
            'maximum_share_commercial_recourse' => '80',
            'minimum_credit' => '80',
            'maximum_credit' => '50000000',
            'contact_person' => 'Mario Rogalas',
            'email' => 'mario.rogalas@airbusbank.com',
            'phone' => '+49 (0)89 290140-5839'
        ],

    //    7
       [
            'name_of_bank' => 'Merkur Privatbank',
            'website' => 'https://www.merkur-privatbank.de/finanzierung/bautraegerfinanzierung.html',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Deutschland, Europäische Union',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere',
            'recourse' =>  '90',
            'non-recourse' => '90',
            'commercial_recourse' => '90',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'1000000',
            'largest_credit' => '30000000',
            'usage_types_for_existing_properties' => '',
            'maximum_share_recourse' =>'0',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '0',
            'maximum_share_commercial_recourse' => '0',
            'minimum_credit' => '0',
            'maximum_credit' => '0',
            'contact_person' => 'André Danielowsky',
            'email' => '',
            'phone' => '089599980'
        ],

    //    8
       [
            'name_of_bank' => 'M.M.Warburg & CO',
            'website' => 'https://www.mmwarburg.de/de/geschaeftskunden/corporate-banking/immobilienkunden/',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Deutschland, Europäische Union, alle',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'Neben den deutschen Top-Sieben-Immobilienstandorten sind wir unter anderem in den dynamischen Immobilienmärkten in Hannover, Dresden und Leipzig mit unserer hohen Expertise vertreten.',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere',
            'recourse' =>  '90',
            'non-recourse' => '90',
            'commercial_recourse' => '90',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'1000000',
            'largest_credit' => '30000000',
            'usage_types_for_existing_properties' => '',
            'maximum_share_recourse' =>'0',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '0',
            'maximum_share_commercial_recourse' => '0',
            'minimum_credit' => '0',
            'maximum_credit' => '0',
            'contact_person' => 'Alexander Föhre',
            'email' => 'AFoehre@mmwarburg.com',
            'phone' => '+49 30 88421-634'
        ],

    //    9
       [
            'name_of_bank' => 'M.M.Warburg & Co Hypothekenbank',
            'website' => 'https://www.warburghyp.de/de/',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Deutschland,Europäische Union, alle',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'Gute bis sehr gute Lagen der Ballungsgebiete Bundesweit',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'recourse' =>  '0',
            'non-recourse' => '0',
            'commercial_(recourse)' => '0',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'0',
            'largest_credit' => '0',
            'usage_types_for_existing_properties' => 'Wohnen, Büro, Einzelhandel',
            'maximum_share_recourse' =>'90',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '90',
            'maximum_share_commercial_recourse' => '90',
            'minimum_credit' => '90',
            'maximum_credit' => '20000000',
            'contact_person' => 'Andreas Steuter',
            'email' => 'ANDREAS.STEUTER@WARBURGHYP.DE',
            'phone' => '+49 40 35 53 34-58'
        ],

        // 10
        [
            'name_of_bank' => 'Hauck & Aufhäuser',
            'website' => 'https://www.hauck-aufhaeuser.com/immobilie-projektfinanzierung-mezzanine-kredite',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Bundesweit',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'„Big 7-Städte“ und die dazugehörigen Metropolregionen Wirtschaftsstarke B-Städte Logistikstandorte entlang der Verkehrsadern',
            'project_developer_permit'=> '',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik',
            'recourse' =>  '80',
            'non-recourse' => '80',
            'commercial_recourse' => '80',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'1000000',
            'largest_credit' => '20000000',
            'usage_types_for_existing_properties' => '0',
            'maximum_share_recourse' =>'0',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '0',
            'maximum_share_commercial_recourse' => '0',
            'minimum_credit' => '0',
            'maximum_credit' => '0',
            'contact_person' => 'Lutz Drewes',
            'email' => 'lutz.drewes@hauck-aufhaeuser.com',
            'phone' => '+49 (0)69 2161-1737'
        ],

    //    11
        [
            'name_of_bank' => 'Donner & Reuschel',
            'website' => 'https://www.donner-reuschel.de/immobilienprofis/',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personend',
            'borrower_domiciled' => 'Deutschland, Europäische Union, alle',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'Annahme: Klassiche Standorte',
            'project_developer_permit'=> 'Vor Bebauungsplan',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere',
            'recourse' =>  '90',
            'non-recourse' => '90',
            'commercial_recourse' => '90',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'1000000',
            'largest_credit' => '30000000',
            'usage_types_for_existing_properties' => '0',
            'maximum_share_recourse' =>'0',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '0',
            'maximum_share_commercial_recourse' => '0',
            'minimum_credit' => '0',
            'maximum_credit' => '0',
            'contact_person' => 'Thomas Jacob',
            'email' => '',
            'phone' => '040302175247'
        ],

    //    12
       [
            'name_of_bank' => 'Allianz',
            'website' => 'https://www.allianz.de/recht-und-eigentum/baufinanzierung/',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personend',
            'borrower_domiciled' => 'alle',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'alles',
            'project_developer_permit'=> '',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'recourse' =>  '0',
            'non-recourse' => '0',
            'commercial_recourse' => '0',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'0',
            'largest_credit' => '0',
            'usage_types_for_existing_properties' => 'Wohnen',
            'maximum_share_recourse' =>'80',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '0',
            'maximum_share_commercial_recourse' => '80',
            'minimum_credit' => '0',
            'maximum_credit' => '10000000',
            'contact_person' => 'Holger Kothe',
            'email' => '',
            'phone' => '030200771044'
        ],

    //    13 
       [
            'name_of_bank' => 'Barmenia',
            'website' => 'https://www.barmenia.de/deu/bde_privat/bde_produkte_privat/bde_haus_haftpflicht/bde_baufinanzierung/uebersicht.xhtml',
            'borrowers_finance' => 'Natürliche Personen,Juristische Personen',
            'borrower_domiciled' => 'Deutschland',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'BRD – in Ostdeutschland nur Landeshauptstädte sowie Rostock und Leipzig',
            'project_developer_permit'=> '',
            'usage_financed' => 'Wohnen,Büro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien',
            'recourse' =>  '0',
            'non-recourse' => '0',
            'commercial_(recourse)' => '0',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'0',
            'largest_credit' => '0',
            'usage_types_for_existing_properties' => 'Wohnen, Büro, Einzelhandel',
            'maximum_share_recourse' =>'80',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '60',
            'maximum_share_commercial_recourse' => '60',
            'minimum_credit' => '60',
            'maximum_credit' => '15000000',
            'contact_person' => '',
            'email' => '',
            'phone' => ''
        ],

    //    14
        [
            'name_of_bank' => 'Bayerische Landesbank',
            'website' => 'BayernLB.de',
            'borrowers_finance' => 'Juristische Personen',
            'borrower_domiciled' => 'Deutschland, Europäische Union',
            'Germany_finance'=>'Bundesweit',
            'exactly'=>'Nur Top-7 Städte',
            'project_developer_permit'=> 'Ab Bebauungsplan / § 34 BauGB',
            'usage_financed' => 'Wohnen,Büro,Logistik',
            'recourse' =>  '90',
            'non-recourse' => '80',
            'commercial_recourse' => '90',
            'commercial_non_recourse' => '90',
            'recourse_hold' => '90',
            'commercial_recourse_hold' => '90',
            'small_credit'=>'0',
            'largest_credit' => '0',
            'usage_types_for_existing_properties' => 'Gleich wie "Projektfinanzierung"',
            'maximum_share_recourse' =>'80',
            'maximum_share_non_recourse' => '80',
            'maximum_share_commercial_non_recourse' => '80',
            'maximum_share_commercial_recourse' => '80',
            'minimum_credit' => '70',
            'maximum_credit' => '0',
            'contact_person' => 'Regional unterschiedlich',
            'email' => '',
            'phone' => ''
        ],

    ]);
    
    }
}
