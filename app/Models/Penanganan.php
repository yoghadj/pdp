<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penanganan extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'penanganans';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const OPSI_SELECT = [
        '1' => 'Accept',
        '2' => 'Eliminate',
        '3' => 'Reduce',
        '4' => 'Mitigate',
    ];

    protected $fillable = [
        'min',
        'max',
        'risiko',
        'penanganan',
        'opsi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const RISIKO_SELECT = [
        '1' => 'Sangat Rendah',
        '2' => 'Rendah',
        '3' => 'Sedang',
        '4' => 'Tinggi',
        '5' => 'Sangat Tinggi',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
