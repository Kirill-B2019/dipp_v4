<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property float $rate
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldRate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GoldRate extends Model
{
    protected $guarded = [];
    protected $table = 'gold_rates';

}
