<?php

namespace Asolagmbh\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use Asolagmbh\Voyager\Facades\Voyager;

class Role extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(Voyager::modelClass('User'), 'user_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Voyager::modelClass('Permission'));
    }
}
