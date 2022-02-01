<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Questionnaire extends Authenticatable
{
    use Notifiable;
   // use HasFactory;
    
    protected $table = 'questionnaire';

    protected $fillable = [
        'name_of_bank',
        'website',
        "borrowers_finance",
        'borrower_domiciled',
        'Germany_finance',
        'exactly',
        'project_developer_permit',
        'usage_financed',
        'recourse',
        'non_recourse',
        'commercial_recourse',
        'commercial_non_recourse',
        'project_finance',
        'small_credit',
        'largest_credit',
        'usage_types_for_existing_properties',
        "maximum_share_recourse",
        'maximum_share_non_recourse',
        'maximum_share_commercial_non_recourse',
        'maximum_share_commercial_recourse',
        'minimum_credit',
        'maximum_credit',
        'contact_person',
        'email',
        'phone',
        'recourse_hold',
        'commercial_recourse_hold'
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
