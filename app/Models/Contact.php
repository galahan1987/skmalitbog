<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Contact extends Model
{
    public $table = 'contact';
    protected $fillable = ['name','email','message'];
}
