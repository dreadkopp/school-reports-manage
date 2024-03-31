<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SchoolGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SchoolGroup extends Model
{
    use HasFactory;
}
