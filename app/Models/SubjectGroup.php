<?php

namespace App\Models;

use Database\Factories\SubjectGroupFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property string      $name
 * @property null|Carbon $created_at
 * @property null|Carbon $updated_at
 *
 * @method static SubjectGroupFactory  factory($count = null, $state = [])
 * @method static Builder|SubjectGroup newModelQuery()
 * @method static Builder|SubjectGroup newQuery()
 * @method static Builder|SubjectGroup query()
 * @method static Builder|SubjectGroup whereCreatedAt($value)
 * @method static Builder|SubjectGroup whereId($value)
 * @method static Builder|SubjectGroup whereName($value)
 * @method static Builder|SubjectGroup whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class SubjectGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
