<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUotemailsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView()
    {
        return <<<SQL
            CREATE VIEW `uotemails` AS select `se`.`me` AS `me`,`u`.`national_id` AS `national_id`,`u`.`entityID` AS `entityID`,`se`.`emal` AS `emal` from (`user` `u` join `staff_uot_emails` `se`) where ((`u`.`national_id` = `se`.`national_id`) and `u`.`entityID` in (select `entity`.`entityID` from `entity` where (`entity`.`parententity` = 18)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `uotemails`;
        SQL;
    }
}
