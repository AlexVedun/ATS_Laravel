<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Question
 *
 * @property int $id
 * @property int $test_id
 * @property string $question_text
 * @property bool $multiple_answers
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Question newModelQuery()
 * @method static Builder|Question newQuery()
 * @method static Builder|Question query()
 * @method static Builder|Question whereCreatedAt($value)
 * @method static Builder|Question whereId($value)
 * @method static Builder|Question whereMultipleAnswers($value)
 * @method static Builder|Question whereQuestionText($value)
 * @method static Builder|Question whereTestId($value)
 * @method static Builder|Question whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Question extends Model
{
    protected $guarded = ['id'];
}
