<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $school_group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PupilFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil whereSchoolGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pupil whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pupil extends Model
{
    use HasFactory;
}
