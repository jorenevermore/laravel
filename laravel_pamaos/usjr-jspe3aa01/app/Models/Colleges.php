<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $primaryKey = 'collid';

    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasManyThrough(Program::class, Department::class, 'deptcollid', 'progcolldeptid', 'collid', 'deptid');
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, Program::class, 'progcollid', 'studprogid', 'collid', 'studcollid');
    }
};

