<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SubjectGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubjectGroup extends Model
{
    use HasFactory;
}
