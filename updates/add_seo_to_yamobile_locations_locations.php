<?php

namespace Yamobile\Locations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSeoToYamobileLocationsLocations extends Migration
{
    public function up()
    {
        Schema::table('yamobile_locations_locations', function ($table)
        {
            $table->string('slug');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_locations_locations', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_keywords');
        });
    }
}
