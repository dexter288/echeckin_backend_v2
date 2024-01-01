<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'telephone',
        'email'
    ];

    public function visitors()
    {
        return $this->hasMany(VisitorLog::class, 'department_id', 'id');
    }
}
