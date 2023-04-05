<?php

namespace Yamobile\Locations\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSortOrderToYamobileLocationsLocations extends Migration
{
    public function up()
    {
        Schema::table('yamobile_locations_locations', function ($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_locations_locations', function ($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
