<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    public function user()
    {
         return $this->belongsTo('App\user','user_id','id');
    }

    public function pesanan_detail()
{
     return $this->hasmany('App\pesananDetail','pesanan_id','id');
}
}
