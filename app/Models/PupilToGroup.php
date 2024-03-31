<?php

namespace App\Models;

use Database\Factories\PupilToGroupFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property int         $pupil_id
 * @property int         $school_group_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static PupilToGroupFactory  factory($count = null, $state = [])
 * @method static Builder|PupilToGroup newModelQuery()
 * @method static Builder|PupilToGroup newQuery()
 * @method static Builder|PupilToGroup query()
 * @method static Builder|PupilToGroup whereCreatedAt($value)
 * @method static Builder|PupilToGroup whereId($value)
 * @method static Builder|PupilToGroup wherePupilId($value)
 * @method static Builder|PupilToGroup whereSchoolGroupId($value)
 * @method static Builder|PupilToGroup whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class PupilToGroup extends Model
{
    use HasFactory;
}
