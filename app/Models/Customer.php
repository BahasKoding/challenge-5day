<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'tb_customers';

    // The attributes that are mass assignable.
    protected $fillable = [
        'branch',
        'code',
        'curr',
        'initial',
        'address_primary',
        'address_secondary',
        'customer',
        'phone',
        'email',
        'category',
        'regions',
        'npwp',
        'bank_description',
        'receivable',
        'discount',
        'vat_ppn',
        'sales',
        'return_amount',
        'prepaid',
        'cost_center_dept',
        'cost_center_cost',
        'account_balance_currency',
        'account_balance_rupiah',
        'account_balance_dn_payment',
        'since',
        'type',
        'audit',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'receivable' => 'decimal:2',
        'discount' => 'decimal:2',
        'vat_ppn' => 'decimal:2',
        'sales' => 'decimal:2',
        'return_amount' => 'decimal:2',
        'prepaid' => 'decimal:2',
        'account_balance_currency' => 'decimal:2',
        'account_balance_rupiah' => 'decimal:2',
        'account_balance_dn_payment' => 'decimal:2',
        'since' => 'date',
    ];
}
