<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Guid\Guid;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRolesAndPermissions;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'full_name',
        'role', // role -> name
        'role_id', // role -> name
        'role_slug', // role -> name
        'user_employee', // role -> name
    ];
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'username',
        'password',
        'phone',
        'type',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
            'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'phone_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
        /**
     * Set the user's full name.
     *
     * @param  string $value
     * @return void
     */
    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }
    /**
     * Set the user's role name.
     *
     * @param  string $value
     * @return void
     */
    public function getRoleAttribute()
    {
        return $this->roles ? $this->roles?->first()?->name : "";
        // return Role::find($this->role_id)->name;
    }
    public function getRoleIdAttribute()
    {
        return $this->roles ? $this->roles?->first()?->id : "";
        // return Role::find($this->role_id)->name;
    }
    public function getRoleSlugAttribute()
    {
        return $this->roles ? $this->roles?->first()?->slug : "";
    }
    public function getUserEmployeeAttribute()
    {
        return $this->employee;
    }
    public function employee()
    {
        return $this->hasOne(Employee::class,'user_id');
    }
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
    
}
