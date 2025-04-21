<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $order_id
 * @property string $amount
 * @property string $payment_method
 * @property string $wallet
 * @property float $price
 * @property int $token
 * @property int $token_bonus
 * @property int $token_total
 * @property string $status
 * @property string $payment_status
 * @property float $price_crypto
 * @property float $amount_crypto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereAmountCrypto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken wherePriceCrypto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereTokenBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereTokenTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken whereWallet($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BuyPlatformToken withoutTrashed()
 * @mixin \Eloquent
 */
class BuyPlatformToken extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
