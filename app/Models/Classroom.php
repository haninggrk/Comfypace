<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $classroom_type_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property integer $total_credit
 * @property string $created_at
 * @property string $updated_at
 * @property ClassroomLevel[] $classroomLevels
 * @property ClassroomSchedule[] $classroomSchedules
 * @property ClassroomTeacher[] $classroomTeachers
 * @property ClassroomType $classroomType
 */
class Classroom extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['classroom_type_id', 'name', 'start_date', 'end_date', 'total_credit', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroomLevels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\ClassroomLevel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroomSchedules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\ClassroomSchedule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroomTeachers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\ClassroomTeacher');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroomType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\ClassroomType');
    }
}
