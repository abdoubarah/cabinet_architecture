<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'n_cahier_chantier',
        'lieux_travaux',
        'date_depot',
        'superfecie',
        'n_autorisation',
        'date_evancement',
        'pvs',
        'date_acheivement	'
    ];

}
