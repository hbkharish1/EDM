<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Search extends Authenticatable
{
    use Notifiable;
   // use HasFactory;
    
    protected $table = 'histories';

    protected $fillable = [
        'finance_type',
        'property_type',
        'borrower_type',
        'borrower_country',
        'project_street',
        'project_street_no',
        'project_postal_code',
        'project_country',
        'project_lettable_area',
        'project_type',
        'project_status',
        'project_purchase_price',
        'project_financing_target',
        'project_business_plantype',
        'project_annual_net_rent_target',
        'project_annual_net_rent_current',
        'duration',
        'project_purchase_contract_signed',
        'annual_rent',
        'estimated_sales_value',
        'total_investment',
        'available_equity',
        'available_senior_loan',
        'required_mezzanine',
        'lat',
        'lng',
        'available_securities',
        'project_comparable_completed'
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
