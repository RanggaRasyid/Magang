<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoogBoook extends Model
{
    use HasFactory, HasUuids, AuthenticableTrait;
    protected $table = 'loogbook_mahasiswa';
    protected $fillable = [
        'id_loogbook',
        'nim',
        'nama',
        'deskripsi'
    ];
    public function nimmhs(){
        return $this->belongsTo(Mahasiswa::class,'nim');
    }
}
