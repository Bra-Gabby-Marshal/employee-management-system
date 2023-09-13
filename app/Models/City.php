<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id',
        'name',
    ];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}