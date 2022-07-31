<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalCounselor extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "hari", "mulai_jam", "hingga_jam"];

    public function jadwal()
    {
        return $this->belongsTo(User::class);
    }
}
