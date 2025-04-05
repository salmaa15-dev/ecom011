<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

    public function getLimitSubjectAttribute() {
        
        return Str::limit($this->subject, 20);
    }

    public function getLimitMessageAttribute() {
        
        return Str::limit($this->message, 20);
    }

}
