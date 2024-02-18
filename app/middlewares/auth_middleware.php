<?php

namespace App\Middleware;

class Auth extends ApplicationMiddleware {
  function root ($req, $res) {
    $req->myDatas = ['hello' => 'world'];

    return [];
  }

  function base () {
    # base {username, password} authentication
  }

  function jwt () {}

  function chat () {}
}
