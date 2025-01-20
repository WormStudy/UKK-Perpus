<?php

namespace App\Models;

use App\Models\KategoriBuku;
use App\Models\Pinjam;
use App\Models\Ulasan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori']; // Tambahkan atribut yang dapat diisi

    public function kategoribukus(){
        return $this->belongsTo(Buku::class);
    }

    public function pinjams(){
        return $this->hasMany(Pinjams::class);
    }

    public function ulasans(){
        return $this->hasMany(Ulasans::class);
    }
}