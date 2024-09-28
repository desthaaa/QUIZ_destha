<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tMasuk extends Model
{
    use HasFactory;
    protected $fillable = ["kdSupplier"
                            ,"tglMasuk"
                            ,"kdAdmin"
                            ,"kdMasuk"
                            ,"totalMasuk"
                            ];
}
