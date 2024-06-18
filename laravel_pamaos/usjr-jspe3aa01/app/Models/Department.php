<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'deptid';

    public function college()
    {
        return $this->belongsTo(College::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcolldeptid', 'deptid');
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, Program::class, 'progcolldeptid', 'studprogid', 'deptid', 'studcollid');
    }
};
