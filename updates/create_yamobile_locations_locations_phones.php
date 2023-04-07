<?php

namespace Yamobile\Locations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileLocationsLocationsPhones extends Migration
{
    public function up()
    {
        Schema::create('yamobile_locations_locations_phones', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('location_id')->unsigned();
            $table->integer('phone_id')->unsigned();
            $table->primary(['location_id','phone_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_locations_locations_phones');
    }
}
