<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProductFeature
 *
 * @property int $id
 * @property int $product_id
 * @property int $feature_id
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductFeature whereValue($value)
 * @mixin \Eloquent
 */
class ProductFeature extends Model
{
    
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'feature_id',
        'value',
    ];
}