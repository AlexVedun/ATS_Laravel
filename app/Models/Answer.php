<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Answer
 *
 * @property int $id
 * @property int $question_id
 * @property string $answer_text
 * @property bool $is_right
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Answer newModelQuery()
 * @method static Builder|Answer newQuery()
 * @method static Builder|Answer query()
 * @method static Builder|Answer whereAnswerText($value)
 * @method static Builder|Answer whereCreatedAt($value)
 * @method static Builder|Answer whereId($value)
 * @method static Builder|Answer whereIsRight($value)
 * @method static Builder|Answer whereQuestionId($value)
 * @method static Builder|Answer whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Answer extends Model
{
    protected $guarded = ['id'];
}
