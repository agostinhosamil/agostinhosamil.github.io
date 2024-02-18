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
   * @Migration 'CreatePost'
   * Draw Base
   */
  class CreatePost extends Migration {
    function up () {
      create_table ('post', function ($t) {
        $t->string ('title');
        $t->text ('body');

        $t->int('user_id')
          ->reference (['id', 'inTable' => 'user'])
          ->onDelete ('cascade')
          ->onUpdate ('cascade');
      });
    }

    function down () {
    }
  }
}
