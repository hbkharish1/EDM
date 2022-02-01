<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mezz extends Authenticatable
{
    use Notifiable;
    protected $table = 'mezz_questionnaire';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'website',
        'borrower_domiciled',
        'Germany_finance',
        'project_developer_permit',
        'exactly',
        'usage_financed',
        'borrower_have_to_have_himself',
        'profile_photo_path',
        'borrower_provide',
        'minimum_credit_volume',
        'maximum_credit_volume',
        'maximum_credit_duration',
        'contact_person',
        'email',
        'phone',
        'track_record',
        'created_at',
        'updated_at'
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
}
