

protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'date_of_birth',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}<?php