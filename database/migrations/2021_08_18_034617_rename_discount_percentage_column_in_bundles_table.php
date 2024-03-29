<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameDiscountPercentageColumnInBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bundles', function (Blueprint $table) {
            $table->renameColumn('discount_percentage', 'bundle_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bundles', function (Blueprint $table) {
            $table->renameColumn('discount_percentage', 'bundle_price');
        });
    }
}
