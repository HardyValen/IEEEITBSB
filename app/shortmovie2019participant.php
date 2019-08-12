<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shortmovie2019participant extends Model
{
    protected $table = 'shortmovie2019participants';
    protected $primaryKey = 'id';
    protected $attributes = [
        'issetLetterOfRecommendation' => 0,
        'issetInvoice' => 0,
        'issetURL' => 0
    ];

    protected $fillable = [
        'teamName',
        'subtheme',
        'namaKetua',
        'nimKetua',
        'URL',
        'issetLetterOfRecommendation',
        'issetInvoice',
        'issetURL',
        'voteScore',
        'teamScore',
        'rank'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
