<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Feature
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Feature extends Model
{
    protected $fillable = [
        'title',
    ];
}
