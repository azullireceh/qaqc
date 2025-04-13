<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialmr extends Model
{
    use HasFactory;
    protected $fillable = [
        'idmrs',
        'id_mrs',
        'tag_number',
        'description',
        'requirment',
        'size',
        'qty',
        'remark',
        'sertifikat',

    ];


    
            
}
