<?php

namespace App\Models;

use Database\Factories\TeacherToSubjectFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property int         $user_id
 * @property int         $school_subject_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static TeacherToSubjectFactory  factory($count = null, $state = [])
 * @method static Builder|TeacherToSubject newModelQuery()
 * @method static Builder|TeacherToSubject newQuery()
 * @method static Builder|TeacherToSubject query()
 * @method static Builder|TeacherToSubject whereCreatedAt($value)
 * @method static Builder|TeacherToSubject whereId($value)
 * @method static Builder|TeacherToSubject whereSchoolSubjectId($value)
 * @method static Builder|TeacherToSubject whereUpdatedAt($value)
 * @method static Builder|TeacherToSubject whereUserId($value)
 *
 * @mixin \Eloquent
 */
class TeacherToSubject extends Model
{
    use HasFactory;
}
