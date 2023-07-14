<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $img_url
 * @property string $description
 * @property integer $order_number
 * @property string $created_at
 * @property string $updated_at
 * @property ClassroomLevel[] $classroomLevels
 * @property Module[] $modules
 */
class Level extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'img_url', 'description', 'order_number', 'created_at', 'updated_at'];

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
    public function modules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Module');
    }
}
