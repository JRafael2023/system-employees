<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'project_id',
    ];

    protected $casts = [
        'employee_id' => 'integer',
        'project_id' => 'integer',
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
