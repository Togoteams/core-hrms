<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Ramsey\Uuid\Guid\Guid;

class Designation extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $guarded = [];
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable =[
        'name',
        'status',
        'description'
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string)Guid::uuid4()->toString();;
        });
    }
   
}
