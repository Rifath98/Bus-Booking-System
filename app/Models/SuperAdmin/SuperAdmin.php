<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SuperAdmin extends Model
{
    protected $table = 'super_admin';
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password'];

}
