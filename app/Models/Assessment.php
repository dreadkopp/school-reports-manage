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
 * @property int $semester_id
 * @property string $descriptive
 * @property string $notes
 * @property string $internal_notes
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AssessmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereDescriptive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereInternalNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment wherePupilId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereSchoolSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereSemesterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assessment whereUpdatedAt($value)
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
