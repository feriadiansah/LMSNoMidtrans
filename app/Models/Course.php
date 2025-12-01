<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'about',
        'path_thiller',
        'thumbnail',
        'teacher_id',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
    public function course_videos(): HasMany
    {
        return $this->HasMany(CourseVideo::class);
    }
    public function course_keypoints(): HasMany
    {
        return $this->HasMany(CourseKeypoint::class);
    }
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_students');
    }
}
