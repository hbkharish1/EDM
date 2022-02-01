<?php

namespace App\Exports;

use App\Questionnaire;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuestionnaireExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array {
        return [
            "id","Name des Kreditinstituts","Webseite des Kreditinstituts",'Darlehensnehmer','Wohnort des Darlehensnehmers','Regionaler Fokus Ihres Kreditinstituts','Finanzierte Standorte innerhalb des regionalen Fokus','Baurechtstatus','Nutzungsarten bei Projektfinanzierung','Maximaler Beleihungsgrad Projektfinanzierung [Wohnen (recourse)]','Maximaler Beleihungsgrad Projektfinanzierung [Wohnen (non-recourse)]','Maximaler Beleihungsgrad Projektfinanzierung [Gewerbe (recourse)]','Maximaler Beleihungsgrad Projektfinanzierung [Gewerbe (non-recourse)]','Minimales Finanzierungsvolumen Projektfinanzierung (€)','Maximales Finanzierungsvolumen Projektfinanzierung (€)','Nutzungsarten bei Bestandsfinanzierung','Maximaler Beleihungsgrad Bestandsfinanzierung [Wohnen (recourse)]','Maximaler Beleihungsgrad Bestandsfinanzierung [Wohnen (non-recourse)]','Maximaler Beleihungsgrad Bestandsfinanzierung [Gewerbe (recourse)]','Maximaler Beleihungsgrad Bestandsfinanzierung [Gewerbe (non-recourse)]', 'Maximales Finanzierungsvolumen Bestandsfinanzierung (€)', 'Minimales Finanzierungsvolumen Bestandsfinanzierung (€)', 'Ansprechpartner für passende Erstanfragen',  'Email-Adresse für passende Erstanfragen','Telefonnummer für passende Erstanfragen','Neubau für den Bestand (Wohnen)', 'Neubau für den Bestand (Gewerbe)'
        ];
    }

    public function collection()
    {
        return Questionnaire::all();
    }
}
