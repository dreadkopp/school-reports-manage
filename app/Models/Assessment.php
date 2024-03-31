<?php

namespace App\Models;

use Database\Factories\AssessmentFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property int         $pupil_id
 * @property int         $school_subject_id
 * @property int         $semester_id
 * @property string      $descriptive
 * @property string      $notes
 * @property string      $internal_notes
 * @property string      $status
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static AssessmentFactory  factory($count = null, $state = [])
 * @method static Builder|Assessment newModelQuery()
 * @method static Builder|Assessment newQuery()
 * @method static Builder|Assessment query()
 * @method static Builder|Assessment whereCreatedAt($value)
 * @method static Builder|Assessment whereDescriptive($value)
 * @method static Builder|Assessment whereId($value)
 * @method static Builder|Assessment whereInternalNotes($value)
 * @method static Builder|Assessment whereNotes($value)
 * @method static Builder|Assessment wherePupilId($value)
 * @method static Builder|Assessment whereSchoolSubjectId($value)
 * @method static Builder|Assessment whereSemesterId($value)
 * @method static Builder|Assessment whereStatus($value)
 * @method static Builder|Assessment whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'pupil_id',
        'school_subject_id',
        'semester_id',
        'descriptive',
        'notes',
        'internal_notes',
        'status',
    ];
}
