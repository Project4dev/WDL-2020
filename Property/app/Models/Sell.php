<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    protected $table = 'sells';
    protected $fillable = [
        'Name',
        'Phone',
        'Email',
        'Price',
        'H_type',
        'Purpose',
        'Add1',
        'Add2',
        'City',
        'State',
        'Zip',
        'S_kitchen',
        'N_washroom',
        'image'
    ];
    public function user(){
        return $this->belongsTo(\App\models\User::class);
    }

}
