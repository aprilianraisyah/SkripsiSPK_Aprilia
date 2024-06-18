<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    use HasFactory;
    protected $table = 'subkriterias';
    public $timestamp = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'kriteria_id',
        'nilai_subkriteria',
    ];
    
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }
}
