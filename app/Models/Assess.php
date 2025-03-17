<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assess extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'assesses';

    public const STATUS_SELECT = [
        '1' => 'Dalam Proses',
        '2' => 'Selesai',
    ];

    protected $dates = [
        'target_penyelesaian',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const TINDAKAN_SELECT = [
        '1' => 'Reduced',
        '2' => 'Eliminated',
        '3' => 'Accepted',
    ];

    public const TINDAKAN_RESIDU_SELECT = [
        '1' => 'Reduced',
        '2' => 'Eliminated',
        '3' => 'Accepted',
    ];

    protected $fillable = [
        'proses_id',
        'isu',
        'risiko',
        'nilai_kemungkinan_id',
        'nilai_dampak_id',
        'total',
        'tindakan_pengendalian',
        'nilai_kontrol_kemungkinan_id',
        'nilai_kontrol_dampak_id',
        'nilai_kontrol_total',
        'tindakan',
        'tinjut_penanganan',
        'persetujuan_tindakan',
        'target_penyelesaian',
        'status',
        'penanggung_jawab',
        'nilai_residu_kemungkinan_id',
        'nilai_residu_dampak_id',
        'nilai_residu_total',
        'tindakan_residu',
        'tinjut_residual',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function proses()
    {
        return $this->belongsTo(Kategori::class, 'proses_id');
    }

    public function nilai_kemungkinan()
    {
        return $this->belongsTo(Cenderung::class, 'nilai_kemungkinan_id');
    }

    public function nilai_dampak()
    {
        return $this->belongsTo(Dampak::class, 'nilai_dampak_id');
    }

    public function nilai_kontrol_kemungkinan()
    {
        return $this->belongsTo(Cenderung::class, 'nilai_kontrol_kemungkinan_id');
    }

    public function nilai_kontrol_dampak()
    {
        return $this->belongsTo(Dampak::class, 'nilai_kontrol_dampak_id');
    }

    public function getTargetPenyelesaianAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTargetPenyelesaianAttribute($value)
    {
        $this->attributes['target_penyelesaian'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function nilai_residu_kemungkinan()
    {
        return $this->belongsTo(Cenderung::class, 'nilai_residu_kemungkinan_id');
    }

    public function nilai_residu_dampak()
    {
        return $this->belongsTo(Dampak::class, 'nilai_residu_dampak_id');
    }
}
