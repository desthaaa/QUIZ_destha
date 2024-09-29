<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class td_Masuk extends Model
{
    use HasFactory;
    protected $fillable = ["idMasuk"
                            ,"kdMasuk"
                            ,"kdBarangBeli"
                            ,"jumlah"
                            ,"subtotal"
                        ];
}
