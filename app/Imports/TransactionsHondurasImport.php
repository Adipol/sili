<?php

namespace App\Imports;

use App\Models\ControlHonduras;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class TransactionsHondurasImport implements ToModel, WithBatchInserts, WithUpserts, WithHeadingRow, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ControlHonduras([
            'id_pep'     => $row['id_pep'],
            'id_all'    => $row['id_all'],
            'type'    => $row['tipo'],
            'code'    => $row['codigo'],
            'name_one'    => $row['nombre1'],
            'name_two'    => $row['nombre2'],
            'last_name_one'    => $row['apaterno'],
            'last_name_two'    => $row['amaterno'],
            'type_document'    => $row['tipodocumento'],
            'nro_document'    => $row['nrodocumento'],
            'extension'    => $row['lextension'],
            'country_abbreviation'    => $row['abrevpais'],
            'country'    => $row['pais'],
            'department'    => $row['departamento'],
            'province'    => $row['provincia'],
            'type_pep'    => $row['tipopep'],
            'position_country'    => $row['paiscargo'],
            'position'    => $row['cargo'],
            'entity'    => $row['entidad'],
            'management'    => $row['gestion'],
            'justification'    => $row['justificacion'],
            'report_date'    => $row['fechareporte'],
            'management_all'    => $row['cargoall'],
            'entity_all'    => $row['entidadall'],
            'justification_all'    => $row['justificacionall'],
            'type_all'    => $row['tipoall'],
            'type_fam'    => $row['tipofam'],
            'detail'    => $row['detalleall'],
            'profession'    => $row['profesion'],
            'id_register'    => $row['id_registro']
        ]);
    }

    public function batchSize(): int
    {
        return 200;
    }

    public function chunkSize(): int
    {
        return 6000;
    }

    public function uniqueBy()
    {
        return 'id_register';
    }
}
