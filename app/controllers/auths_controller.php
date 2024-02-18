<?php
namespace {
  /**
   * AuthsController   * -
   * Controller that'll manage
   * the application basic requests
   */
  class AuthsController extends SamiController {
    function login () {
    }

    function authenticate ($req, $res) {
      $auth = User::authenticate (params ['user']);

      if (!$auth) {
        $res->status (401)->end ([
          'error' =>  'Unauhorized',
          'message' => 'Email or password is incorrect'
        ]);
      }

      $res->end ('Hey, ' . $auth->username);
    }
  }
}
