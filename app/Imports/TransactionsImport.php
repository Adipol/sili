<?php

namespace App\Imports;

use App\Models\Control;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class TransactionsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Control([
            'id_pep'     => $row[0],
            'id_all'    => $row[1],
            'type'    => $row[2],
            'code'    => $row[3],
            'name_one'    => $row[4],
            'name_two'    => $row[5],
            'last_name_one'    => $row[6],
            'last_name_two'    => $row[7],
            'type_document'    => $row[8],
            'nro_document'    => $row[9],
            'extension'    => $row[10],
            'country_abbreviation'    => $row[11],
            'country'    => $row[12],
            'department'    => $row[13],
            'province'    => $row[14],
            'type_pep'    => $row[15],
            'position_country'    => $row[16],
            'position'    => $row[17],
            'entity'    => $row[18],
            'management'    => $row[19],
            'justification'    => $row[20],
            'report_date'    => $row[21],
            'management_all'    => $row[22],
            'entity_all'    => $row[23],
            'justification_all'    => $row[24],
            'type_all'    => $row[25],
            'type_fam'    => $row[26],
            'detail'    => $row[27],
            'profession'    => $row[28],
            'id_register'    => $row[29]
        ]);
    }

    // public function batchSize(): int
    // {
    //     return 200;
    // }


    // public function uniqueBy()
    // {
    //     return 'id_register';
    // }
}
