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
   * @Migration 'CreatePlanDetail'
   * Draw Base
   */
  class CreatePlanDetail extends Migration {
    function up () {
      # [ 'label' => 'Source code's, 'enabled' => true, 'value' => '' ]
      create_table ('planDetail', function ($t) {
        $t->string ('label');
        $t->boolean ('enabled');
        $t->string ('value')
          ->nullable ();
      });
    }

    function down () {
    }
  }
}
