<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandetransport extends Model
{
    use HasFactory;

    protected $fillable = [
        'condTransp',
        'nom',
        'prenom',
        'email',
        'date_Dep',
        'adresse_Dep',
        'adresse_Arriv',
        'estUrgent',
        'estFacture',
        'refEtb',
        'idMalade',
        'idChauffeur',

    ];

}
