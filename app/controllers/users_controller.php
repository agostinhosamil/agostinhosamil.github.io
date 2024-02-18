<?php
namespace {
  use Sammy\Packs\Kery\Config;

  /**
   * UsersController   * -
   * Controller that'll manage
   * the application basic requests
   */
  class UsersController extends SamiController {
    
    /**
     * @method void index
     */
    function index () {
      // Config::primaryKeyMap (['post' => 'author']);

      $users = User::all ();

      return $users;
    }

    function store () {
      $userData = params ['user'];

      $user = User::create ($userData);

      return $user;
    }
    
  }
}
