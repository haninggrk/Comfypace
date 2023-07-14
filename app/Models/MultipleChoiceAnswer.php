<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $multiple_choice_question_id
 * @property string $img
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 * @property MultipleChoiceQuestion $multipleChoiceQuestion
 */
class MultipleChoiceAnswer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['multiple_choice_question_id', 'img', 'text', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function multipleChoiceQuestion(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\MultipleChoiceQuestion');
    }
}
