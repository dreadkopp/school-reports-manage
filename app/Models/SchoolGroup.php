<?php

namespace App\Models;

use Database\Factories\SchoolGroupFactory;
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
 * @method static SchoolGroupFactory  factory($count = null, $state = [])
 * @method static Builder|SchoolGroup newModelQuery()
 * @method static Builder|SchoolGroup newQuery()
 * @method static Builder|SchoolGroup query()
 * @method static Builder|SchoolGroup whereCreatedAt($value)
 * @method static Builder|SchoolGroup whereId($value)
 * @method static Builder|SchoolGroup whereName($value)
 * @method static Builder|SchoolGroup whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class SchoolGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
