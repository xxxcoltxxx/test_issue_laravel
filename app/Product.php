<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 */
class Product extends Model
{
    public $fillable = ['title'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
