<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Perjalanan extends Model
{
    use HasFactory;

    protected $table='perjalanans';
    protected $fillable=['id_user','tanggal','jam','lokasi','suhu'];

    public function userModels() {
        return $this->belongsTo(User::class);
    }
}

