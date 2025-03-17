<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CenderungDampak extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'cenderung_dampaks';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'cenderung_id',
        'dampak_id',
        'nilai',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function cenderung()
    {
        return $this->belongsTo(Cenderung::class, 'cenderung_id');
    }

    public function dampak()
    {
        return $this->belongsTo(Dampak::class, 'dampak_id');
    }
}
