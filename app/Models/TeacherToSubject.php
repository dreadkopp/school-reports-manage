<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $school_subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TeacherToSubjectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject whereSchoolSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherToSubject whereUserId($value)
 * @mixin \Eloquent
 */
class TeacherToSubject extends Model
{
    use HasFactory;
}
