<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_description',
        'start_time',
        'end_time',
        'total_time',
        'state',
        'status',
        'employee_id',
        'project_id',
    ];

    protected $casts = [
        'activity_description' => 'string',
        'start_time' => 'string',
        'end_time' => 'string',
        'total_time' => 'string',
        'state' => 'string',
        'status' => 'boolean',
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
