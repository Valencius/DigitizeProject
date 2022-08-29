<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture', 'Nama','creator','desc','category','TotalVote'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
