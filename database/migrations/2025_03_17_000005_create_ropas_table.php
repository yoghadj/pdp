<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRopasTable extends Migration
{
    public function up()
    {
        Schema::create('ropas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unit_kerja');
            $table->string('sub_unit');
            $table->string('fungsi');
            $table->string('pic');
            $table->string('proses_bisnis');
            $table->string('peran');
            $table->string('jenis_data');
            $table->boolean('umum_nama_lengkap')->default(0)->nullable();
            $table->boolean('umum_jenkel')->default(0)->nullable();
            $table->boolean('umum_kewarganegaraan')->default(0)->nullable();
            $table->boolean('umum_agama')->default(0)->nullable();
            $table->boolean('umum_kawin')->default(0)->nullable();
            $table->string('umum_kombinasi');
            $table->boolean('spesifik_sehat')->default(0)->nullable();
            $table->boolean('spesifik_biometrik')->default(0)->nullable();
            $table->boolean('spesifik_genetik')->default(0)->nullable();
            $table->boolean('spesifik_jahat')->default(0)->nullable();
            $table->boolean('spesifik_anak')->default(0)->nullable();
            $table->boolean('spesifik_uang')->default(0)->nullable();
            $table->string('spesifik_lain')->nullable();
            $table->boolean('format_elektronik')->default(0)->nullable();
            $table->boolean('format_nonelektronik')->default(0)->nullable();
            $table->string('tujuan');
            $table->string('owner');
            $table->string('sumber');
            $table->boolean('simpan_divsendiri')->default(0)->nullable();
            $table->boolean('simpan_divlain')->default(0)->nullable();
            $table->boolean('simpan_vendor')->default(0)->nullable();
            $table->boolean('aman_akses')->default(0)->nullable();
            $table->boolean('aman_enkripsi')->default(0)->nullable();
            $table->boolean('aman_otentikasi')->default(0)->nullable();
            $table->string('aman_lainnya')->nullable();
            $table->boolean('proses_olehkumpul')->default(0)->nullable();
            $table->boolean('proses_olahanalisis')->default(0)->nullable();
            $table->boolean('proses_simpan')->default(0)->nullable();
            $table->boolean('proses_baik')->default(0)->nullable();
            $table->boolean('proses_tampil')->default(0)->nullable();
            $table->boolean('proses_hapus')->default(0)->nullable();
            $table->string('aliran_input');
            $table->string('aliran_output');
            $table->string('transfer_tujuan')->nullable();
            $table->string('transfer_tipe')->nullable();
            $table->string('transfer_metode')->nullable();
            $table->string('retensi_periode');
            $table->string('retensi_metode');
            $table->boolean('konsen_kumpul')->default(0)->nullable();
            $table->string('konsen_mekanisme')->nullable();
            $table->string('konsen_wajib');
            $table->boolean('konsen_aturan')->default(0)->nullable();
            $table->boolean('konsen_vital')->default(0)->nullable();
            $table->boolean('konsen_umum')->default(0)->nullable();
            $table->boolean('konsen_lain')->default(0)->nullable();
            $table->string('konsen_simpan');
            $table->string('aplikasi')->nullable();
            $table->boolean('implementasi_tujuan')->default(0)->nullable();
            $table->boolean('implementasi_update')->default(0)->nullable();
            $table->boolean('implementasi_akses')->default(0)->nullable();
            $table->boolean('implementasi_hapus')->default(0)->nullable();
            $table->boolean('implementasi_tarik')->default(0)->nullable();
            $table->boolean('implementasi_berat')->default(0)->nullable();
            $table->boolean('implementasi_tunda')->default(0)->nullable();
            $table->boolean('implementasi_rugi')->default(0)->nullable();
            $table->boolean('implementasi_pakai')->default(0)->nullable();
            $table->boolean('implementasi_kirim')->default(0)->nullable();
            $table->boolean('join_pihak')->default(0)->nullable();
            $table->boolean('join_janji')->default(0)->nullable();
            $table->boolean('join_tujuan')->default(0)->nullable();
            $table->boolean('join_pic')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
