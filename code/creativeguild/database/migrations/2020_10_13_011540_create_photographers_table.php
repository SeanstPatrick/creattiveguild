<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $fillable = ['name', 'phone', 'email','bio','profile_picture'];

    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('phone');
            $table->string('email', 100)->unique();
            $table->text('bio');
            $table->string('profile_picture');
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
        Schema::dropIfExists('photographers');
    }
}
