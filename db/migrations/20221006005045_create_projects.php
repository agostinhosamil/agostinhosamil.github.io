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
   * @Migration 'CreateProjects'
   * Draw Base
   */
  class CreateProjects extends Migration {
    function up () {
      # $url, $githubUrl, $thumbnail
      create_table ('project', function ($t) {
        $t->string ('url');
        $t->string ('githubUrl');
        $t->string ('thumbnail');
      });
    }

    function down () {
      drop_table ('project');
    }
  }
}
