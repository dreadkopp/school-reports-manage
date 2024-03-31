<?php

namespace App\Models;

use Database\Factories\TeacherToGroupFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property int         $user_id
 * @property int         $school_group_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static TeacherToGroupFactory  factory($count = null, $state = [])
 * @method static Builder|TeacherToGroup newModelQuery()
 * @method static Builder|TeacherToGroup newQuery()
 * @method static Builder|TeacherToGroup query()
 * @method static Builder|TeacherToGroup whereCreatedAt($value)
 * @method static Builder|TeacherToGroup whereId($value)
 * @method static Builder|TeacherToGroup whereSchoolGroupId($value)
 * @method static Builder|TeacherToGroup whereUpdatedAt($value)
 * @method static Builder|TeacherToGroup whereUserId($value)
 *
 * @mixin \Eloquent
 */
class TeacherToGroup extends Model
{
    use HasFactory;
}
