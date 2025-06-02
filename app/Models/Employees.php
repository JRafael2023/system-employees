<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'type_document',
        'num_document',
        'phone',
        'address',
        'salary',
        'status',
        'user_id',
        'department_id',
    ];

    protected $casts = [
        'name' => 'string',
        'last_name' => 'string',
        'type_document' => 'string',
        'num_document' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'salary' => 'string',
        'status' => 'boolean',
        'user_id' => 'integer',
        'department_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
