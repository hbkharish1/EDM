

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `mezz_questionnaire` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `borrowers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finance_properties` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_developer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exactly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage_are_financed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `borrower_have_to_have_himself` double NOT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `borrower_provide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_credit_volume` double DEFAULT NULL,
  `maximum_credit_volume` double DEFAULT NULL,
  `maximum_credit_duration` double DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track_record` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('1','Exporo','https://www.exporo.immo/','Deutschland','Bundesweit','Vor Bebauungsplan','alle','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','5','','','750000','10000000','36','','','040 / 21 09 17 320','0','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('2','Zinsbaustein','https://www.zinsbaustein.de/so-funktionierts/projekt-partner','Deutschland','Bundesweit','Vor Bebauungsplan','alle','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','5','','','1000000','6000000','60','','','030 3465570-49','0','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('3','Bergf??rst','https://de.bergfuerst.com/finanzieren','Deutschland','Bundesweit','Vor Bebauungsplan','alle','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','5','','','1000000','6000000','60','','',' ','0','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('4','DBCFinance','http://www.dbc-finance.de/mezzanine.html','Deutschland','Bundesweit','Ab Bebauungsplan / ?? 34 BauGB','S??ddeutschland, Berlin, Hamburg, K??ln, D??sseldorf, Frankfurt am Main und Hannover','Wohnen','0','','Grundschuld, werthaltige B??rgschaft','1000000','6000000','36','','','08920603130','0','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('5','Linus Finance','https://www.linus-finance.com/financing','Deutschland','Bundesweit','Vor Bebauungsplan','Bestandsobjekte und Projektentwicklungen in A- und B-St??dten der DACH-Region','Wohnen,B??ro,Logistik,Betreiberimmobilien','5','','','3000000','100000000','60','','','+49 (0) 30 629 3968 10','5-jan','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('6','EV Digital Invest','https://www.ev-digitalinvest.de/','Deutschland','Bundesweit','Ab Bebauungsplan / ?? 34 BauGB','Ballungsr??ume','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','5','','','1000000','50000000','48','','','030 403691550','1-5','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('7','iFunded','https://ifunded.de/de/projektentwickler','Deutschland','Bundesweit','Ab Bebauungsplan / ?? 34 BauGB','alles','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','5','','','500000','6000000','48','','','+49 30 555 728 550','0','','');

INSERT INTO mezz_questionnaire (id, name, website, borrowers, finance_properties, project_developer, exactly, usage_are_financed, borrower_have_to_have_himself, profile_photo_path, borrower_provide, minimum_credit_volume, maximum_credit_volume, maximum_credit_duration, contact_person, email, phone, track_record, created_at, updated_at) VALUES ('9','HARISHKUMAR N','http://127.0.0.1:8000/editlist/1','Deutschland','Munich (M??nchen)','Baugenehmigung skizzieren','TAMIL NADU','B??ro','1211','','sdasd','12312','12312','2132','hsdjahsj','hbkharish1@gmail.com','1232343343','6','','');


CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO migrations (id, migration, batch) VALUES ('1','2014_10_12_000000_create_users_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('2','2019_08_19_000000_create_failed_jobs_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('3','2021_04_15_124019_create_mezz_questionnaire_table','1');

INSERT INTO migrations (id, migration, batch) VALUES ('4','2021_04_15_124414_create_questionnaire_table','1');


CREATE TABLE `questionnaire` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_of_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `borrowers_finance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `borrower_domiciled` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Germany_finance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exactly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_developer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage_financed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recourse` double DEFAULT NULL,
  `non_recourse` double DEFAULT NULL,
  `commercial_recourse` double DEFAULT NULL,
  `recourse_hold` double DEFAULT NULL,
  `commercial_recourse_hold` double DEFAULT NULL,
  `project_finance` double DEFAULT NULL,
  `small_credit` double DEFAULT NULL,
  `largest_credit` double DEFAULT NULL,
  `Existing_properties` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Maximum_loan` double DEFAULT NULL,
  `existing_credit` double DEFAULT NULL,
  `maximum_share` double DEFAULT NULL,
  `FOR_EXISTING_BUILDIN` double DEFAULT NULL,
  `Minimum_Credit_1` double DEFAULT NULL,
  `Minimum_Credit_2` double DEFAULT NULL,
  `Maximum_Credit` double DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('1','Berliner Sparkasse im Test','www.teststparkasse.de','Nat??rliche Personen,Juristische Personen','Deutschland,Europ??ische Union,Test,au??er test,Test und Test','Rhein-Main-Gebiet','alles','Ab Bebauungsplan / ?? 34 BauGB','Wohnen,B??ro,Weitere','90','90','90','90','90','90','10000000','5000000','Gleich wie "Projektfinanzierung",B??ro,Logistik,Produktion','80','80','60','80','70','500000','1000000','','','Heinz M??llerwowitsch','heinz@m??llerowtisch.tv','0049800696969','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('2','Berliner Sparkasse im Test','saadw','Nat??rliche Personen,Juristische Personen','','','','','','0','0','0','90','90','0','0','0','Gleich wie "Projektfinanzierung"','70','60','70','70','80','3','5','','','','','','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('3','Berliner Sparkasse im Test','','Nat??rliche Personen,Juristische Personen','Deutschland,Europ??ische Union','Regional am Standort des Instituts','','Vor Bebauungsplan','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere','90','90','90','90','90','90','100000','50000000','Gleich wie "Projektfinanzierung"','50000','90','90','90','90','90','50000000','','','','','','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('4','Airbus Bank','https://www.airbusbank.com/de/real-estate','Nat??rliche Personen,Juristische Personen','Deutschland,Europ??ische Union',' Ballungsr??umen M??nchen, Ingolstadt, Augsburg, Stuttgart, N??rnberg, F??rth, Erlangen sowie in Jena und Erfurt.','Angenommen: Alles','Vor Bebauungsplan','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere','90','90','90','90','90','90','400000','50000000','Gleich wie "Projektfinanzierung"','80','80','80','80','80','4000','50000000','','','Mario Rogalas','mario.rogalas@airbusbank.com','+49 (0)89 290140-5839','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('5','Merkur Privatbank','https://www.merkur-privatbank.de/finanzierung/bautraegerfinanzierung.html','Nat??rliche Personen,Juristische Personen','Deutschland, Europ??ische Union','Bundesweit','','Vor Bebauungsplan','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere','90','90','90','90','90','90','1000000','30000000','','0','0','0','0','0','0','0','','','Andr?? Danielowsky','','089599980','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('6','M.M.Warburg & CO','https://www.mmwarburg.de/de/geschaeftskunden/corporate-banking/immobilienkunden/','Nat??rliche Personen,Juristische Personen','Deutschland, Europ??ische Union, alle','Bundesweit','Neben den deutschen Top-Sieben-Immobilienstandorten sind wir unter anderem in den dynamischen Immobilienm??rkten in Hannover, Dresden und Leipzig mit unserer hohen Expertise vertreten.','Vor Bebauungsplan','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere','90','90','90','90','90','90','1000000','30000000','','0','0','0','0','0','0','0','','','Alexander F??hre','AFoehre@mmwarburg.com','+49 30 88421-634','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('7','M.M.Warburg & Co Hypothekenbank','https://www.warburghyp.de/de/','Nat??rliche Personen,Juristische Personen','Deutschland,Europ??ische Union, alle','Bundesweit','Gute bis sehr gute Lagen der Ballungsgebiete Bundesweit','Vor Bebauungsplan','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','0','0','0','90','90','0','0','0','Wohnen, B??ro, Einzelhandel','90','90','90','90','90','1000000','20000000','','','Andreas Steuter','ANDREAS.STEUTER@WARBURGHYP.DE','+49 40 35 53 34-58','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('8','Hauck & Aufh??user','https://www.hauck-aufhaeuser.com/immobilie-projektfinanzierung-mezzanine-kredite','Nat??rliche Personen,Juristische Personen','Bundesweit','Bundesweit','???Big 7-St??dte??? und die dazugeh??rigen Metropolregionen Wirtschaftsstarke B-St??dte Logistikstandorte entlang der Verkehrsadern','','Wohnen,B??ro,Einzelhandel,Logistik','80','80','80','90','90','80','1000000','20000000','0','0','0','0','0','0','0','0','','','Lutz Drewes','lutz.drewes@hauck-aufhaeuser.com','+49 (0)69 2161-1737','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('9','Donner & Reuschel','https://www.donner-reuschel.de/immobilienprofis/','Nat??rliche Personen,Juristische Personend','Deutschland, Europ??ische Union, alle','Bundesweit','Annahme: Klassiche Standorte','Vor Bebauungsplan','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien,Weitere','90','90','90','90','90','90','1000000','30000000','0','0','0','0','0','0','0','0','','','Thomas Jacob','','040302175247','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('10','Allianz','https://www.allianz.de/recht-und-eigentum/baufinanzierung/','Nat??rliche Personen,Juristische Personend','alle','Bundesweit','alles','','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','0','0','0','90','90','0','0','0','Wohnen','80','80','0','80','0','50000','10000000','','','Holger Kothe','','030200771044','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('11','Barmenia','https://www.barmenia.de/deu/bde_privat/bde_produkte_privat/bde_haus_haftpflicht/bde_baufinanzierung/uebersicht.xhtml','Nat??rliche Personen,Juristische Personen','Deutschland','Bundesweit','BRD ??? in Ostdeutschland nur Landeshauptst??dte sowie Rostock und Leipzig','','Wohnen,B??ro,Einzelhandel,Logistik,Produktion,Betreiberimmobilien','0','0','0','90','90','0','0','0','Wohnen, B??ro, Einzelhandel','80','80','60','60','60','100000','15000000','','','','','','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('12','Bayerische Landesbank','BayernLB.de','Juristische Personen','Deutschland, Europ??ische Union','Bundesweit','Nur Top-7 St??dte','Ab Bebauungsplan / ?? 34 BauGB','Wohnen,B??ro,Logistik','90','80','90','90','90','80','0','0','Gleich wie "Projektfinanzierung"','80','70','80','80','70','15000000','0','','','Regional unterschiedlich','','','','');

INSERT INTO questionnaire (id, name_of_bank, website, borrowers_finance, borrower_domiciled, Germany_finance, exactly, project_developer, usage_financed, recourse, non_recourse, commercial_recourse, recourse_hold, commercial_recourse_hold, project_finance, small_credit, largest_credit, Existing_properties, Maximum_loan, existing_credit, maximum_share, FOR_EXISTING_BUILDIN, Minimum_Credit_1, Minimum_Credit_2, Maximum_Credit, lat, lng, contact_person, email, phone, created_at, updated_at) VALUES ('16','HARISHKUMAR N','http://127.0.0.1:8000/editlist/1','Nat??rliche Personen','Deutschland','Cologne (K??ln)','TAMIL NADU','Vor Bebauungsplan','Wohnen','223','123','1213','','','123','123','21323','B??ro','123','','123','123','1233','123','','','','sdasdasdasd','asdas@gmail.com','1234343','2021-04-29 08:48:25','2021-04-29 08:48:25');


CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_reset` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO users (id, email, lastname, firstname, phone_number, website, email_verified_at, password, two_factor_reset, two_factor_recovery_codes, remember_token, current_team_id, profile_photo_path, created_at, updated_at) VALUES ('1','hbkharish1@gmail.com','kumar','harish122','8903501104112','harish','','$2y$10$htVD5HbaSZfl.RNcV4Zhd.ynyGART7AmodE9XD6eNZ7VZwuzZX3eq','','','','','','','2021-04-29 11:27:02');
