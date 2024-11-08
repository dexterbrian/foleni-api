<?php

use App\Models\Branch;
use App\Models\Counter;
use App\Models\Customer;
use App\Models\Operator;
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
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->string('service_type', 64);
            $table->string('status', 64);
            $table->foreignIdFor(Branch::class);
            $table->foreignIdFor(Counter::class);
            $table->foreignIdFor(Operator::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
