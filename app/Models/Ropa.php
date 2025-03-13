<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ropa extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'ropas';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const TRANSFER_TIPE_SELECT = [
        '1' => 'Elektronik',
        '2' => 'Non-Elektronik',
    ];

    public const PERAN_SELECT = [
        '1' => 'Controller',
        '2' => 'Processor',
        '3' => 'Joint Controller',
    ];

    public const STATUS_SELECT = [
        '1' => 'Posisi di Konseptor',
        '2' => 'Posisi di Kepala Unit Kerja',
        '3' => 'Posisi di DPO',
    ];

    public const KONSEN_MEKANISME_SELECT = [
        '1' => 'Formulir Fisik',
        '2' => 'Formulir Elektronik',
        '3' => 'Pop Up Application',
        '4' => 'Application',
        '5' => 'Voice Record',
        '6' => 'Telephone',
    ];

    public const TRANSFER_METODE_SELECT = [
        '1' => 'Email',
        '2' => 'Upload',
        '3' => 'H2H',
        '4' => 'File Sharing',
        '5' => 'Kurir',
        '6' => 'Surat/POS',
        '7' => 'Diantar langsung',
        '8' => 'Lainnya',
    ];

    public const JENIS_DATA_SELECT = [
        '1' => 'Data Karyawan',
        '2' => 'Data Konsumen',
        '3' => 'Data Nasabah',
        '4' => 'Data Debitur',
        '5' => 'Data Kreditur',
        '6' => 'Data Pihak Ketiga',
        '7' => 'Data Mitra Kerja',
        '8' => 'Data Vendor',
    ];

    public const KONSEN_SIMPAN_SELECT = [
        '1' => 'Filling Cabinet/Lemari',
        '2' => 'Book File',
        '3' => 'Arsip Fisik',
        '4' => 'Arsip Digital',
        '5' => 'Log System',
        '6' => 'Database',
        '7' => 'Consent Management System',
        '8' => 'Cloud Storage',
    ];

    protected $fillable = [
        'unit_kerja',
        'sub_unit',
        'fungsi',
        'pic',
        'proses_bisnis',
        'peran',
        'jenis_data',
        'umum_nama_lengkap',
        'umum_jenkel',
        'umum_kewarganegaraan',
        'umum_agama',
        'umum_kawin',
        'umum_kombinasi',
        'spesifik_sehat',
        'spesifik_biometrik',
        'spesifik_genetik',
        'spesifik_jahat',
        'spesifik_anak',
        'spesifik_uang',
        'spesifik_lain',
        'format_elektronik',
        'format_nonelektronik',
        'tujuan',
        'owner',
        'sumber',
        'simpan_divsendiri',
        'simpan_divlain',
        'simpan_vendor',
        'aman_akses',
        'aman_enkripsi',
        'aman_otentikasi',
        'aman_lainnya',
        'proses_olehkumpul',
        'proses_olahanalisis',
        'proses_simpan',
        'proses_baik',
        'proses_tampil',
        'proses_hapus',
        'aliran_input',
        'aliran_output',
        'transfer_tujuan',
        'transfer_tipe',
        'transfer_metode',
        'retensi_periode',
        'retensi_metode',
        'konsen_kumpul',
        'konsen_mekanisme',
        'konsen_wajib',
        'konsen_aturan',
        'konsen_vital',
        'konsen_umum',
        'konsen_lain',
        'konsen_simpan',
        'aplikasi',
        'implementasi_tujuan',
        'implementasi_update',
        'implementasi_akses',
        'implementasi_hapus',
        'implementasi_tarik',
        'implementasi_berat',
        'implementasi_tunda',
        'implementasi_rugi',
        'implementasi_pakai',
        'implementasi_kirim',
        'join_pihak',
        'join_janji',
        'join_tujuan',
        'join_pic',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
