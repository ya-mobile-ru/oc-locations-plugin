<?php

namespace Yamobile\Locations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEmployees extends Migration
{
    public function up()
    {
        Schema::create('yamobile_locations_employees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('slug');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_locations_employees');
    }
}
