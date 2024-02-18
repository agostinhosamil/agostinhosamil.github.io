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
   * @Migration 'CreateSkills'
   * Draw Base
   */
  class CreateSkills extends Migration {
    function up () {
      create_table ('skill', function ($t) {
        $t->string ('title');
        $t->int ('level');
        $t->string ('color');
        $t->tinyText ('paragraphes');
      });
    }

    function down () {
      drop_table ('skill');
    }
  }
}
