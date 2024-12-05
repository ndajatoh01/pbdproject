<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{

    protected $table='view_penerimaan';

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'iduser');
    }
}
