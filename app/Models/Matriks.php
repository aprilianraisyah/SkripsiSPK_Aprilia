<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriks extends Model
{
    protected $table = 'matriks';
    public $timestamp = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'kriteria_id',
        'alternatif_id',
        'subkriteria_id',
    ];
    
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id', 'id');
    }

    public function subkriteria()
    {
        return $this->belongsTo(Subkriteria::class, 'subkriteria_id', 'id');
    }

}
