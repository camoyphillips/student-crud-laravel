<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * Many-to-many relationship: A course can have many students for this lms.
     */
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }

    /**
     * One-to-one relationship: A course has one professor tfor this lms.
     */
    public function professor(): HasOne
    {
        return $this->hasOne(Professor::class);
    }
}
