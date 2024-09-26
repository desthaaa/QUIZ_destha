<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tBarang extends Model
{
    use HasFactory;
    protected $fillable = ["satuan"
                            ,"namaBarang"
                            ,"kdBarang"
                            ,"hargaJual"
                            ,"hargaBeli"
                            ,"stok"
                            ,"status"];
}
