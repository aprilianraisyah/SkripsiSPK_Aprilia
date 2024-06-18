<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriterias';
    public $timestamp = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_kriteria',
        'bobot',
        'jenis_kriteria',
    ];

    public function subkriteria()
    {
        return $this->hasMany(Subkriteria::class, 'id');
    }
}
