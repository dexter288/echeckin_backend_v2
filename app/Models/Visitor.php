<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'firstname',
        'middlename',
        'surname',
        'status',
        'cellphone',
        'omang',
        'passport_number',
        'nationality',
    ];

    public function visits()
    {
        return $this->hasMany(VisitorLog::class, 'visitor_id', 'id');
    }
}
