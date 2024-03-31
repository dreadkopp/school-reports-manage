<?php

namespace App\Models;

use Database\Factories\SchoolSubjectFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property string      $name
 * @property int         $subject_group_id
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static SchoolSubjectFactory  factory($count = null, $state = [])
 * @method static Builder|SchoolSubject newModelQuery()
 * @method static Builder|SchoolSubject newQuery()
 * @method static Builder|SchoolSubject query()
 * @method static Builder|SchoolSubject whereCreatedAt($value)
 * @method static Builder|SchoolSubject whereId($value)
 * @method static Builder|SchoolSubject whereName($value)
 * @method static Builder|SchoolSubject whereSubjectGroupId($value)
 * @method static Builder|SchoolSubject whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class SchoolSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject_group_id',
    ];
}
