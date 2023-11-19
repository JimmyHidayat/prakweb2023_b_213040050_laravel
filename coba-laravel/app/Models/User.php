<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     *The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ee80837 (Video 15 : User Registration)
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
=======
=======
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];
    protected $guarded = [
        'id',
>>>>>>> eb68209 (Video 15 : User Registration)
>>>>>>> ee80837 (Video 15 : User Registration)
    ];

    /**
     *The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
