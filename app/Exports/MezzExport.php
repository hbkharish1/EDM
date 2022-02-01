<?php

namespace App\Exports;

use App\Mezz;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MezzExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array {
        return [
            "id","Name des Kreditinstituts","Webseite des Kreditinstituts",'Standort des Darlehensnehmers','Regionaler Fokus Ihres Kreditinstituts','Finanzierte Standorte innerhalb des regionalen Fokus','Baurechtstatus','Nutzungsarten bei Projektfinanzierung','Eigenkapital','Sicherheiten','Minimales Finanzierungsvolumen (€)','Maximales Finanzierungsvolumen (€)','Maximale Darlehenslaufzeit in Monaten','Ansprechpartner für passende Erstanfragen','Email-Adresse für passende Erstanfragen','Telefonnummer für passende Erstanfragen','Track-Record'
        ];
    }

    public function collection()
    {
        return Mezz::all();
    }
}
