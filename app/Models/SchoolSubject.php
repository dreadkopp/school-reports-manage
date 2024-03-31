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
 * @method static \Database\Factories\SchoolSubjectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SchoolSubject extends Model
{
    use HasFactory;
}
