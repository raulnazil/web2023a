<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawans extends Model
{
    protected $table = 'karyawans';
    protected $primaryKey = 'id';
    protected $fillable = ['kode','nama','alamat','pekerjaan','notlpn'];
    use HasFactory;
}