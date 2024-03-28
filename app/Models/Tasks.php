<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Tasks extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'company_id',
    ];

    public function user()
    {
        //return $this->hasMany(Users::class, 'user_id', 'id');
        return $this->belongsTo(Users::class);
    }
    public function company()
    {
       // return $this->hasMany(Companies::class, 'company_id', 'id');
       return $this->belongsTo(Companies::class);
    }
}
