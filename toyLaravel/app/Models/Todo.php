<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'heading',
        'content',
        'isCompleted',
        'user_id'
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
