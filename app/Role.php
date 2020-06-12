<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{
    protected $guarded=[];
    use SoftDeletes;
    //Softdeletes
    protected $dates=['deleted_at'];
    public function user()
    {
        return $this->hasMany('\App\User');
    }
}
