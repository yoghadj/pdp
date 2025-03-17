<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'kategoris';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'proses',
        'stakeholder',
        'kriteria_hukum',
        'kriteria_spesifik',
        'kriteria_besar',
        'kriteria_evaluasi',
        'kriteria_cocok',
        'kriteria_teknologi',
        'kriteria_batas',
        'pia',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
