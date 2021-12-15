<?php

namespace GMedia\VaBca\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $connection = 'vabca';
    protected $table = 'bill';

    protected $fillable = [
        // 'id',
        
        'company_code',
        'customer_number',
        'request_id',
        'channel_type',
        'transaction_date',
        'additional_data',

        'created_at',
        'updated_at',
    ];

    protected $hidden = [];

    protected $casts = [
        'id' => 'integer',

        'company_code' => 'integer',
        'customer_number' => 'string',
        'request_id' => 'string',
        'channel_type' => 'string',
        'transaction_date' => 'string',
        'additional_data' => 'string',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
