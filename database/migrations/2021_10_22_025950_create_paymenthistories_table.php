<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymenthistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymenthistories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects','id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('amount_paid');
            $table->date('date_paid');
            $table->string('description');
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
        Schema::dropIfExists('paymenthistories');
    }
}
