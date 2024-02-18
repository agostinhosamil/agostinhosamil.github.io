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
   * @Migration 'CreateReaction'
   * Draw Base
   */
  class CreateReaction extends Migration {
    function up () {
      create_table ('reaction', function ($t) {
        $t->string('type');
      });
    }

    function down () {
    }
  }
}
