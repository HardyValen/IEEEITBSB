<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casestudy2019 extends Model
{
    protected $table = 'caseStudy2019';
    protected $primaryKey = 'id';
    protected $attributes = [
        'issetFotoKetua' => 0,
        'issetFotoAnggota1' => 0,
        'issetFotoAnggota2' => 0,
        'issetKTMKetua' => 0,
        'issetKTMAnggota1' => 0,
        'issetKTMAnggota2' => 0,
        'issetEssay' => 0
    ];

    protected $fillable = [
        'namaKetua',
        'subtheme',
        'namaAnggota1',
        'namaAnggota2',
        'nimKetua',
        'nimAnggota1',
        'nimAnggota2',
        'issetFotoKetua',
        'issetFotoAnggota1',
        'issetFotoAnggota2',
        'issetKTMKetua',
        'issetKTMAnggota1',
        'issetKTMAnggota2',
        'issetEssay'
    ];
}
