<?php

namespace App\Exports;

use App\Models\Control;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionsExportAll implements FromQuery, WithHeadings
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Control::query()->select(
            'id_pep',
            'id_all',
            'type',
            'code',
            'name_one',
            'name_two',
            'last_name_one',
            'last_name_two',
            'type_document',
            'nro_document',
            'extension',
            'country_abbreviation',
            'country',
            'department',
            'province',
            'type_pep',
            'position_country',
            'position',
            'entity',
            'management',
            'justification',
            'report_date',
            'management_all',
            'entity_all',
            'justification_all',
            'type_all',
            'type_fam',
            'detail',
            'profession',
            'id_register'
        );
    }

    public function headings(): array
    {
        return [
            'ID_PEP',
            'ID_ALL',
            'TIPO',
            'CODIGO',
            'NOMBRE1',
            'NOMBRE2',
            'APATERNO',
            'AMATERNO',
            'TIPODOCUMENTO',
            'NRODOCUMENTO',
            'LEXTENSION',
            'ABREVPAIS',
            'PAIS',
            'DEPARTAMENTO',
            'PROVINCIA',
            'TIPOPEP',
            'PAISCARGO',
            'CARGO',
            'ENTIDAD',
            'GESTION',
            'JUSTIFICACION',
            'FECHAREPORTE',
            'CARGOALL',
            'ENTIDADALL',
            'JUSTIFICACIONALL',
            'TIPOALL',
            'TIPOFAM',
            'DETALLEALL',
            'PROFESION',
            'ID_REGISTRO'
        ];
    }

    /*
    public function map($transaction): array
    {
        return [
            $transaction->name_on_card,
            'XXXXXXXXXXXX' . substr($transaction->card_no, -4, 4),
            $transaction->exp_month,
            $transaction->exp_year,
            $transaction->cvv,
        ];
    }*/
}
