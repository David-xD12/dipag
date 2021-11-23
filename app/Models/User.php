<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\FormFacade;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'proceedings',
        'password',
        'address',
        'abilities',
        'workplace',
        'notas',
        'nsession',
        'category_id',
        'id_safe',
        'section_id',
        'buscar',
        'actAdmin',
        'fechaAct',
        'updated_at'




    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function section()
    {
        return $this->hasMany(Section::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    //Scope

    public function scopeName($query, $name)
    {
        if ($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeProceedings($query, $proceedings)
    {
        if ($proceedings)
            return $query->where('proceedings', 'LIKE', "%$proceedings%");
    }

    public function role()
    {
        return $this -> belongsTo(Role::class);
    }

    public function hasRoles(array $roles)
    {
        foreach ($roles as  $role)
        {
            if ($this->role->key === $role)
            {
                return true;
            }
        }
        return false;
    }
}
