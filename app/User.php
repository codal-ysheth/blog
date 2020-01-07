<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Passport\HasApiTokens;
use \Venturecraft\Revisionable\RevisionableTrait;

class User extends Authenticatable
{
    use Notifiable, Sortable, SoftDeletes, HasApiTokens, RevisionableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'f_name', 'email', 'password', 'l_name', 'username', 'phone_no', 'dob', 'address', 'active', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = ['deleted_at'];

    public $sortable = ['name', 'email', 'username', 'active'];

    public function role()
    {
        return $this->hasOne('App\Model\Role', 'id', 'role_id');
    }
}
