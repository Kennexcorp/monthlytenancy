<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('occupation')->nullable()->default(null);
            $table->string('organization_name')->nullable()->default(null);
            $table->string('organization_address')->nullable()->default(null);
            $table->string('id_type')->nullable()->default(null);
            $table->string('id_number')->nullable()->default(null);
            $table->string('account_statement')->nullable()->default(null);
            $table->string('callup_letter')->nullable()->default(null);
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
        Schema::dropIfExists('work_infos');
    }
}
