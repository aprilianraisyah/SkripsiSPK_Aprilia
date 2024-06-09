<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianAlternatif extends Model
{
    use HasFactory;
    protected $table = 'penilaianalternatifs';
    public $timestamp = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_alternatif',
        'nama_kriteria',
        'nilai_kecocokan',
    ];
}
