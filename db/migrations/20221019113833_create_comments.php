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
   * @Migration 'CreateComments'
   * Draw Base
   */
  class CreateComments extends Migration {
    function up () {
      create_table ('comment', function ($t) {
        $t->string ('content');
        $t->int ('post_id')
          ->reference (['id', 'inTable' => 'post'])
          ->onDelete ('cascade')
          ->onUpdate ('cascade');
        $t->int ('user_id')
          ->reference (['id', 'inTable' => 'user'])
          ->onDelete ('cascade')
          ->onUpdate ('cascade');
      });
    }

    function down () {
    }
  }
}
