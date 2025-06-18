<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    //public $timestamps = true;
    protected $table = "anggota";
    protected $fillable = ["nama", "no"]; // Fillable attribute adalah attribut yang boleh diisi, sedangkan semua attribute lainnya tidak boleh 
    protected $guarded = ["id"]; // Guarded attribute adalah attribut yang tidak dapat diisi, sedangkan semua attribute lainnya boleh
}
