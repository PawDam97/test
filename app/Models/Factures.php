<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    protected $fillable=[
        'number',
        'date',
        'total'
    ];
}
