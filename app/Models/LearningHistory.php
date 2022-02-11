<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningHistory extends Model
{
    use HasFactory;
    protected $table = 'learningHistory';
    const CREATED_AT = 'time';
    const UPDATED_AT = NULL;
    protected $primaryKey = null;
    public $incrementing = false;
}
