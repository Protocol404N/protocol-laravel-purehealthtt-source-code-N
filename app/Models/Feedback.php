<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;


    protected $table = 'feedbacks';


    protected $fillable = [
        'feedbackcode',
        'customercode',
        'ordercode',
        'status',
        'content',
        'phone',
        'created_at'
    ];
}
