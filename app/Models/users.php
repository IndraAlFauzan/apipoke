<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'uid';
    protected $fillable = ['name', 'email', 'password'];

    public function usersCourses()
    {
        return $this->hasMany(users_courses::class, 'uid', 'uid');
    }
    
    
}
