<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;

    protected $table = 'controls';
    protected $guarded = array();

    protected $fillable = [
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
    ];

    const PEP = 1;
    const LISTA = 2;
}
