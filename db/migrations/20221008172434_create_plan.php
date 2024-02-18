<?php
/**
 * -----------------
 * @package Sami\Base
 * - Draw data base table structure
 * - accordig to what is defined inside
 * - the migration (change or up) method
 */
namespace Sami\Base {
  /**
   * @Migration 'CreatePlan'
   * Draw Base
   */
  class CreatePlan extends Migration {
    function up () {
      create_table ('plan', function ($t) {
        $t->string ('title');
        $t->string ('icon');
        $t->string ('color');
        $t->string ('price');

        $detailsList = $t->int ('detail_id')
          ->reference (['id', 'inTable' => 'planDetail'])
          ->onDelete ('cascade')
          ->onUpdate ('cascade');
      });
    }

    function down () {
    }
  }
}
