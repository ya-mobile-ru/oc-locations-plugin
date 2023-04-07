<?php

namespace Yamobile\Locations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileLocationsPhones extends Migration
{
    public function up()
    {
        Schema::create('yamobile_locations_phones', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->string('number');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_locations_phones');
    }
}
