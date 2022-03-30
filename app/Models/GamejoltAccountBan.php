<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GamejoltAccountBan extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });

        self::updating(function ($model) {
            if (!$model->uuid) {
                $model->uuid = Str::uuid()->toString();
            }
        });
    }

    protected $primaryKey = 'id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that will be used for multiple key binding on route models
     *
     * @var array
     */
    protected $routeBindingKeys = ['uuid'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['gamejoltaccount_id', 'banned_by_id', 'reason_id', 'expire_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'expire_at' => 'datetime',
    ];

    /**
     * The attributes that should be logged for the user.
     *
     * @return array
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty();
    }

    /**
     * Get the gamejolt account associated with the gamejolt account ban.
     */
    public function gamejoltaccount()
    {
        return $this->hasOne(GamejoltAccount::class, 'id', 'gamejoltaccount_id');
    }

    /**
     * Get the reason associated with the gamejolt account ban.
     */
    public function reason()
    {
        return $this->hasOne(BanReason::class, 'id', 'reason_id');
    }

    /**
     * Get the user associated with the gamejolt account ban.
     */
    public function banned_by()
    {
        return $this->hasOne(User::class, 'id', 'banned_by_id');
    }
}
