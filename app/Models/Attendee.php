<?php

namespace App\Models;

use App\Filament\Resources\MeetingsResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Attendee extends Model
{
    protected $fillable = ["name", "who_invited_me", "is_recurrent"];
}