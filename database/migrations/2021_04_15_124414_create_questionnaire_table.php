<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_bank')->nullable();
            $table->string('website')->nullable();
            $table->string('borrowers_finance')->nullable();
            $table->string('borrower_domiciled')->nullable();
            $table->string('Germany_finance')->nullable();
            $table->string('exactly')->nullable();
            $table->string('project_developer_permit')->nullable();
            $table->string('usage_financed')->nullable();
            $table->double('recourse')->nullable();
            $table->double('non-recourse')->nullable();
            $table->double('commercial_recourse')->nullable();
            $table->double('commercial_non_recourse')->nullable();
            $table->double('recourse_hold')->nullable();
            $table->double('commercial_recourse_hold')->nullable();
            $table->double('small_credit')->nullable();
            $table->double('largest_credit')->nullable();
            $table->string('usage_types_for_existing_properties')->nullable();
            $table->double('maximum_share_recourse')->nullable();
            $table->double('maximum_share_non_recourse')->nullable();
            $table->double('maximum_share_commercial_non_recourse')->nullable();
            $table->double('maximum_share_commercial_recourse')->nullable();
            $table->double('minimum_credit')->nullable();
            $table->double('maximum_credit')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('questionnaire');
    }
}
