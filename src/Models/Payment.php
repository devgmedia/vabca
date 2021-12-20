<?php

namespace Gmedia\VaBca\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $connection = 'vabca';
    protected $table = 'payment';

    protected $fillable = [
        // 'id',
        
        'company_code',
        'customer_number',
        'request_id',
        'channel_type',
        'channel_type_description',
        'customer_name',
        'currency_code',
        'paid_amount',
        'total_amount',
        'sub_company',
        'transaction_date',
        'reference',
        'detail_bills',
        'flag_advice',
        'additional_data',

        'created_at',
        'updated_at',

    ];

    protected $hidden = [];

    protected $casts = [
        'id' => 'integer',

        'company_code' => 'string',
        'customer_number' => 'string',
        'request_id' => 'string',
        'channel_type' => 'string',
        'channel_type_description' => 'string',
        'customer_name' => 'string',
        'currency_code' => 'string',
        'paid_amount' => 'string',
        'total_amount' => 'string',
        'sub_company' => 'string',
        'transaction_date' => 'datetime',
        'reference' => 'string',
        'detail_bills' => 'string',
        'flag_advice' => 'string',
        'additional_data' => 'string',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];
}
