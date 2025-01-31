<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

class Task extends Model
{
    //
    use HasFactory;
    protected $guarded = [];

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string)Guid::uuid4()->toString();;
        });
        static::deleting(function($model) {
        });
        static::deleting(function($model) {
        });
    }
    public function assigner()
    {
        return $this->belongsTo(User::class,'assignor_user_id');
    }
    public function assignee()
    {
        return $this->belongsTo(User::class,'assignee_user_id');
    }
    public const STATUS_PENDING = 0;
    public const STATUS_CONFIRMED = 1;
    public const STATUS_ASSIGNED = 2;
    public const STATUS_SERVICE_IN_PROGRESS = 3;
    public const STATUS_COMPLETED = 4;
    public const STATUS_HOLD = 5;
    public const STATUS_CANCELLED = 6;

    public const STATUS = [
        self::STATUS_PENDING => 'Pending',
        self::STATUS_CONFIRMED => 'Confirmed',
        self::STATUS_ASSIGNED => 'Assigned',
        self::STATUS_SERVICE_IN_PROGRESS => 'Service In process',
        self::STATUS_COMPLETED => 'Completed',
        self::STATUS_HOLD => 'Hold',
        self::STATUS_CANCELLED => 'Cancelled',
    ];

    public function getStatusNameAttribute()
    {
        return self::STATUS[$this->status] ?? 'Unknown status';
    }   
}
