<?php

class User extends Sami\Base {
	function constructor () {
		validates (
      ['name', 'unique' => true],
      ['email', 'unique' => true]
    );
		validate_presence_of ('name', 'email', 'username');
		validate_uniqueness_of ('name');

    has_many ('post');
	}

  static function beforeCreate ($user) {
    $ncrypt = requires ('ncrypt');

    $user->password = $ncrypt->ncrypt ($user->password);
  }

  /**
   * @method boolean
   *
   * @param array $data
   * [
   *   username => string
   *   password => string
   * ]
   */
  static function authenticate ($data) {
    $users = static::readUserNameAndPassword ($data ['username']);

    if ($users) {
      list ($user) = $users;

      $ncrypt = requires ('ncrypt');

      if ($ncrypt->equal_hash ($data ['password'], $user->password)) {
        return $user;
      }
    }
  }
}
