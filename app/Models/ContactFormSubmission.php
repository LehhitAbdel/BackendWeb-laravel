<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;


class ContactFormSubmission extends Model
{
    use HasFactory;

    public $timestamps = true;

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    protected $fillable = ['user_id', 'message',];

}

