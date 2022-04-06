<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'email',
        'website',
        'picture',
        'about'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
