<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function consultants()
    {
        return $this->hasMany(Consultant::class);
    }

    public function partenaires()
    {
        return $this->hasMany(Partenaire::class);
    }
}
