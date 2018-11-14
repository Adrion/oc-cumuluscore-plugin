<?php namespace Initbiz\Cumuluscore\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateClusterFeatureLogsTable extends Migration
{
    public function up()
    {
        Schema::create('initbiz_cumuluscore_cluster_feature_logs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('cluster_id');
            $table->string('feature_code');
            $table->string('action');
            $table->timestamp('timestamp')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('initbiz_cumuluscore_cluster_feature_registrations');
    }
}
