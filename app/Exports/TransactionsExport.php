<?php

namespace App\Exports;

use App\Models\Control;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionsExport implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Control::query()->select('ID_PEP', 'ID_ALL', 'TIPO', 'CODIGO', 'NOMBRE1', 'NOMBRE2', 'APATERNO', 'AMATERNO', 'TIPODOCUMENTO', 'NRODOCUMENTO', 'LEXTENSION', 'ABREVPAIS', 'PAIS', 'DEPARTAMENTO', 'PROVINCIA', 'TIPOPEP', 'PAISCARGO', 'CARGO', 'ENTIDAD', 'GESTION', 'JUSTIFICACION', 'FECHAREPORTE', 'CARGOALL', 'ENTIDADALL', 'JUSTIFICACIONALL', 'TIPOALL', 'TIPOFAM', 'DETALLEALL', 'PROFESION', 'ID_REGISTRO');
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
