<?php

namespace App\Models;

use Database\Factories\PupilToSubjectFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property int         $pupil_id
 * @property int         $school_subject_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static PupilToSubjectFactory  factory($count = null, $state = [])
 * @method static Builder|PupilToSubject newModelQuery()
 * @method static Builder|PupilToSubject newQuery()
 * @method static Builder|PupilToSubject query()
 * @method static Builder|PupilToSubject whereCreatedAt($value)
 * @method static Builder|PupilToSubject whereId($value)
 * @method static Builder|PupilToSubject wherePupilId($value)
 * @method static Builder|PupilToSubject whereSchoolSubjectId($value)
 * @method static Builder|PupilToSubject whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class PupilToSubject extends Model
{
    use HasFactory;
}
