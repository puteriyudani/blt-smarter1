<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kriteria_id', 'prioritas'];

    public function Kriteria()
    {
        return $this->hasMany(Kriteria::class);
    }
}
