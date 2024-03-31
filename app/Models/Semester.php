<?php

namespace App\Models;

use Database\Factories\SemesterFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property null|Carbon $start_date
 * @property null|Carbon $end_date
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static SemesterFactory  factory($count = null, $state = [])
 * @method static Builder|Semester newModelQuery()
 * @method static Builder|Semester newQuery()
 * @method static Builder|Semester query()
 * @method static Builder|Semester whereCreatedAt($value)
 * @method static Builder|Semester whereEndDate($value)
 * @method static Builder|Semester whereId($value)
 * @method static Builder|Semester whereStartDate($value)
 * @method static Builder|Semester whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];
}
