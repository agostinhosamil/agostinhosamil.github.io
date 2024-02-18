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
	 * @Migration 'create_users'
	 * Draw Base
	 */
	class create_users extends Migration {
		function change () {
			create_table ('user', function ($t) {
				$t->string ('name');
				$uname = $t->string ('username');
        $uname->unique = true;
        $uname->null = false;

        $pass = $t->string ('password', 200);
        $pass->null = false;

        $mail = $t->string ('email');
        $mail->null = false;
        $mail->unique = true;

				$t->date ('birthday');
			});
		}
	}
}
