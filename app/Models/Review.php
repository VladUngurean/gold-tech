<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'client_name',
        'review_post_date',
        'review_content',
        'project_name',
        'project_realisation_date'
    ];
}
