<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMezzQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mezz_questionnaire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('website')->nullable();
            $table->string('borrower_domiciled')->nullable();
            $table->string('Germany_finance')->nullable();
            $table->string('project_developer_permit')->nullable();
            $table->string('exactly')->nullable();
            $table->string('usage_financed')->nullable();
            $table->double('borrower_have_to_have_himself');
            $table->string('profile_photo_path')->nullable();
            $table->string('borrower_provide')->nullable();
            $table->double('minimum_credit_volume')->nullable();
            $table->double('maximum_credit_volume')->nullable();
            $table->double('maximum_credit_duration')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('track_record')->nullable();
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
        Schema::dropIfExists('_mezz_questionnaire');
    }
}
