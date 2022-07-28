<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class counselorProfile extends Model
{
    use HasFactory;
    protected $guarded = ['user_id'];
    public function profile()
    {
        return $this->belongsTo(User::class);
    }
    public function kampus()
    {
        return $this->hasMany(kampus::class);
    }
}
