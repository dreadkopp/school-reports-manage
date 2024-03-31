<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $pupil_id
 * @property int $school_group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PupilToGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup wherePupilId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup whereSchoolGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PupilToGroup extends Model
{
    use HasFactory;
}
