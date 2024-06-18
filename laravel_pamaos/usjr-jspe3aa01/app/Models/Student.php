<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'studid';

    public function program()
    {
        return $this->belongsTo(Program::class, 'studprogid', 'progid');
    }

    public function college()
    {
        return $this->belongsTo(College::class, 'studcollid', 'collid');
    }
};
