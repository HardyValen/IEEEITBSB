<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casestudy2019participant extends Model
{
    protected $table = 'casestudy2019participants';
    protected $primaryKey = 'id';
    protected $attributes = [
        'issetFotoKetua' => 0,
        'issetFotoAnggota1' => 0,
        'issetFotoAnggota2' => 0,
        'issetKTMKetua' => 0,
        'issetKTMAnggota1' => 0,
        'issetKTMAnggota2' => 0,
        'issetEssay' => 0,
        'issetInvoice' => 0,
        'isFinalist' => 0
    ];

    protected $fillable = [
        'teamname',
        'subtheme',
        'namaKetua',
        'gelombang',
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
        'issetEssay',
        'issetInvoice',
        'preliminaryScore',
        'isFinalist',
        'finalScore'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
