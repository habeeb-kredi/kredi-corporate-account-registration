<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('rc_number')->nullable();
            $table->string('country');
            $table->string('business_type');
            $table->string('incorporation_date')->nullable();
            $table->string('cac_document_url')->nullable();
            $table->string('organization_contact');
            $table->string('organization_email');
            $table->string('webhook_url')->nullable();
            $table->string('director_name');
            $table->string('director_contact');
            $table->string('director_email');
            $table->string('director_id_card')->nullable();
            $table->string('director_passport')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
