<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'department_id',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'status' => 'boolean',
        'department_id' => 'integer',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function employees()
    {
        return $this->hasMany(Employees::class);
    }
}
