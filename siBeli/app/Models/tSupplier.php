<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tSupplier extends Model
{
    use HasFactory;
    protected $fillable = ["kdSupplier"
                            ,"namaSupplier"
                            ,"alamat"
                        ];
}
