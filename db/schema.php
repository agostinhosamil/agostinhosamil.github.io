<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sami\Base
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * --
 *
 * Sami Base Schema definition
 * This is an auto generated file that
 * should not be modified manually by
 * your self; it you really think is
 * necessary to have a different structure
 * for you database just create or edit a
 * migration in 'db/migrations' directory.
 *
 * This file is not a way for creating or
 * adding new tables in the database, it's
 * just a map of the database structure that
 * helps 'sami-base' filling up each of the
 * application models structure.
 */
namespace Sami\Base {
  /**
   * Define the database schema structure
   * according to whole created migrations
   *
   * THIS FILE WAS CHANGED LAST TIME AT '20230107172558'
   */
  Schema::Define (['version' => 20230107172558], function () {
    create_table ('user', function ($t) {
			$t->varchar ('name');
			$username = $t->varchar ('username');
			$username->unique = true;
			$username->null = false;
			$password = $t->varchar ('password');
			$password->null = false;
			$email = $t->varchar ('email');
			$email->null = false;
			$email->unique = true;
			$t->date ('birthday');
		});

		create_table ('post', function ($t) {
			$t->varchar ('title');
			$t->text ('body');
			$userId = $t->int ('user_id');
			$userId->reference = ['id', 'inTable' => 'user'];
			$userId->onDelete = 'cascade';
			$userId->onUpdate = 'cascade';
		});

		create_table ('project', function ($t) {
			$t->varchar ('url');
			$t->varchar ('githuburl');
			$t->varchar ('thumbnail');
		});

		create_table ('detail', function ($t) {
			$t->varchar ('label');
			$t->boolean ('enabled');
			$value = $t->varchar ('value');
			$value->null = true;
		});

		create_table ('plan', function ($t) {
			$t->varchar ('title');
			$t->varchar ('icon');
			$t->varchar ('color');
			$t->varchar ('price');
			$detailId = $t->int ('detail_id');
			$detailId->reference = ['id', 'inTable' => 'planDetail'];
			$detailId->onDelete = 'cascade';
			$detailId->onUpdate = 'cascade';
		});

		create_table ('reaction', function ($t) {
			$t->varchar ('type');
		});

		create_table ('plandetail', function ($t) {
			$t->varchar ('label');
			$t->boolean ('enabled');
			$value = $t->varchar ('value');
			$value->null = true;
		});

		create_table ('comment', function ($t) {
			$t->varchar ('content');
			$postId = $t->int ('post_id');
			$postId->reference = ['id', 'inTable' => 'post'];
			$postId->onDelete = 'cascade';
			$postId->onUpdate = 'cascade';
			$userId = $t->int ('user_id');
			$userId->reference = ['id', 'inTable' => 'user'];
			$userId->onDelete = 'cascade';
			$userId->onUpdate = 'cascade';
		});

		create_table ('skill', function ($t) {
			$t->varchar ('title');
			$t->int ('level');
			$t->varchar ('color');
			$t->tinytext ('paragraphes');
		});
  });
}
