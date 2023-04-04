<?php

namespace Yamobile\Locations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateYamobileLocationsLocations extends Migration
{
    public function up()
    {
        Schema::create('yamobile_locations_locations', function ($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('country');
            $table->string('locality');
            $table->string('region');
            $table->string('street');
            $table->string('postal_code')->nullable();
            $table->string('post_office_box')->nullable();
            $table->string('fax')->nullable();
            $table->string('geo_latitude')->nullable();
            $table->string('geo_longitude')->nullable();
            $table->string('opening_hours')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yamobile_locations_locations');
    }
}
