<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

class Employee extends Model
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
