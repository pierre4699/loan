<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'libelle'
    ];
    public function users() {
        return $this -> belongsToMany(User::class);
    }

    public $timestamps=false;
}
