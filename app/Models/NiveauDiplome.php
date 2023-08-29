<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiveauDiplome extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function consultants()
    {
        return $this->belongsToMany(Consultant::class);
    }


}
