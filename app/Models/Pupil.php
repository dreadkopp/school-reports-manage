<?php

namespace App\Models;

use Database\Factories\PupilFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property string      $name
 * @property int         $school_group_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static PupilFactory  factory($count = null, $state = [])
 * @method static Builder|Pupil newModelQuery()
 * @method static Builder|Pupil newQuery()
 * @method static Builder|Pupil query()
 * @method static Builder|Pupil whereCreatedAt($value)
 * @method static Builder|Pupil whereId($value)
 * @method static Builder|Pupil whereName($value)
 * @method static Builder|Pupil whereSchoolGroupId($value)
 * @method static Builder|Pupil whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Pupil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school_group_id',
    ];
}
