<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVtNairobiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vt_nairobi', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('lot_number');
            $table->string('status')->nullable();
            $table->bigInteger('vials');
            $table->string('temperature');
            $table->text('description')->nullable();
            $table->date('mfg_date');
            $table->date('expiry_date');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vt_nairobi');
    }
}
