<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Test
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Test newModelQuery()
 * @method static Builder|Test newQuery()
 * @method static Builder|Test query()
 * @method static Builder|Test whereCreatedAt($value)
 * @method static Builder|Test whereId($value)
 * @method static Builder|Test whereName($value)
 * @method static Builder|Test whereUpdatedAt($value)
 * @method static Builder|Test whereUserId($value)
 * @mixin Eloquent
 * @property-read Collection|Question[] $questions
 * @property-read int|null $questions_count
 * @property-read User $user
 * @property string $alias
 * @method static Builder|Test whereAlias($value)
 */
class Test extends Model
{
    protected $guarded = ['id'];

    // Relations

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
