<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kampus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kampus()
    {
        return $this->hasMany(counselorProfile::class);
    }
}
