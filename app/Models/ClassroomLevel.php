<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $classroom_id
 * @property integer $level_id
 * @property boolean $is_active
 * @property Classroom $classroom
 * @property Level $level
 */
class ClassroomLevel extends Model
{
    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['classroom_id', 'level_id', 'is_active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroom(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Classroom');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Level');
    }
}
