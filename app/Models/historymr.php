<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historymr extends Model
{
    use HasFactory;
    protected $fillable = [
        'idmrs',
        'id_mrs',
        'id_historymrs',
        'project',
        'spesifikasi',
        'jenis_meter',
        'stream',
        'qty_evc',
        'qty_psv_prv',
        'qty_filter_pv',
        'pnid',
        'tanggal_sertifikasi',
        'sertifikat_coiplo',
    ];
}
