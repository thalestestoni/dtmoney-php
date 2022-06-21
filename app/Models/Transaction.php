<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function type(){
        return $this->belongsTo(TypeTransaction::class);
    }
}
