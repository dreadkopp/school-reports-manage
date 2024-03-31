<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $pupil_id
 * @property int $school_subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PupilToSubjectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject wherePupilId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject whereSchoolSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PupilToSubject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PupilToSubject extends Model
{
    use HasFactory;
}
