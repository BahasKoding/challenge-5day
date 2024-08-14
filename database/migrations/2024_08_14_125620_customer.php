<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_customers', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('code');
            $table->string('curr');
            $table->string('initial');
            $table->string('address_primary');
            $table->string('address_secondary')->nullable();
            $table->string('customer');
            $table->string('phone');
            $table->string('email');
            $table->string('category');
            $table->string('regions');
            $table->string('npwp')->nullable();
            $table->string('bank_description')->nullable();
            $table->decimal('receivable', 15, 2)->default(0.00);
            $table->decimal('discount', 15, 2)->default(0.00);
            $table->decimal('vat_ppn', 15, 2)->default(0.00);
            $table->decimal('sales', 15, 2)->default(0.00);
            $table->decimal('return_amount', 15, 2)->default(0.00);
            $table->decimal('prepaid', 15, 2)->default(0.00);
            $table->string('cost_center_dept')->nullable();
            $table->string('cost_center_cost')->nullable();
            $table->decimal('account_balance_currency', 15, 2)->default(0.00);
            $table->decimal('account_balance_rupiah', 15, 2)->default(0.00);
            $table->decimal('account_balance_dn_payment', 15, 2)->default(0.00);
            $table->date('since')->nullable();
            $table->string('type')->nullable();
            $table->text('audit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_customers');
    }
};
