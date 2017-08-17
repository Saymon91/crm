<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    const TYPES = [
        'text' => ['pattern' => '[A-Za-z0-9_-.]{4, 20}'],
    ];
    const FIELDS = [
        'username' => ['type' => 'text', 'label' => 'username']
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        foreach (self::FIELDS as $item) {
            $item['label'] = trans("labels.{$item['label']}");
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'username', 'email', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public static function getRegistrationForm()
    {
        return [
            'class' => 'form-register',
            'name' => 'register',
            'route' => 'portal::register',
            'method' => 'post',
            'header' => ['centerContent' => trans('user.registration')],
            'fields' => [
                [
                    'id' => 'username', 'label' => 'username',
                    'attributes' => ['type' => 'text', 'name' => 'username', 'title' => 'username', 'pattern' => '[A-Za-z0-9_-.]{4, 20}', 'required' => true]
                ],
                [
                    'id' => 'phone', 'label' => 'phone',
                    'attributes' => ['type' => 'text', 'name' => 'phone', 'title' => 'phone', 'pattern' => '\d{11}', 'required' => true]
                ],
                [
                    'id' => 'full_name', 'label' => 'full_name',
                    'attributes' => ['type' => 'text', 'name' => 'full_name', 'title' => 'full_name', 'pattern' => '[A-Za-zА-Яа-я\s\-]{2, 60}$', 'required' => true]
                ],
                [
                    'id' => 'small_name', 'label' => 'small_name',
                    'attributes' => ['type' => 'text', 'name' => 'secondname', 'title' => 'secondname', 'pattern' => '[A-Za-zА-Яа-я\s-]{, 60}']
                ],
                [
                    'id' => 'email', 'label' => 'email',
                    'attributes' => ['type' => 'text', 'name' => 'email', 'title' => 'email', 'pattern' => '[A-Za-z0-9._-]*@[A-Za-z0-9._-]*\.[A-Za-z0-9._-]*']
                ]
            ]
        ];
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function conterparty()
    {
        return $this->hasOne(Conterparty::class, 'id', 'id');
    }

    public function privileges()
    {
        return $this->hasMany(Privilege::class, 'id', 'user_id');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'users_roles', 'id', 'user_id');
    }
}
