<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $exercise_id
 * @property integer $exercise_type_id
 * @property integer $order_number
 * @property string $created_at
 * @property string $updated_at
 * @property Exercise $exercise
 * @property ExerciseType $exerciseType
 * @property FillInTheBlankQuestion[] $fillInTheBlankQuestions
 * @property MatchingQuestion[] $matchingQuestions
 * @property MultipleChoiceQuestion[] $multipleChoiceQuestions
 * @property SortingItem[] $sortingItems
 * @property SortingQuestion[] $sortingQuestions
 * @property TrueFalseQuestion[] $trueFalseQuestions
 */
class ExerciseQuestion extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['exercise_id', 'exercise_type_id', 'order_number', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exercise(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Exercise');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exerciseType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\ExerciseType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fillInTheBlankQuestions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\FillInTheBlankQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matchingQuestions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\MatchingQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function multipleChoiceQuestions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\MultipleChoiceQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sortingItems(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\SortingItem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sortingQuestions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\SortingQuestion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trueFalseQuestions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\TrueFalseQuestion');
    }
}
