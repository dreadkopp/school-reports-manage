<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $school_group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TeacherToGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup whereSchoolGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToGroup whereUserId($value)
 * @mixin \Eloquent
 */
class TeacherToGroup extends Model
{
    use HasFactory;
}
