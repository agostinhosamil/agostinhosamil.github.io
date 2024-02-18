<?php

class appMiddleware extends ApplicationMiddleware {
  /**
   * [auth]
   * @param  Sami\Packs\HTTP\Request $req
   * @param  Sami\Packs\HTTP\Response $res
   * @return array
   */
  function auth ($req, $res) {

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ( !$id ) {
      $res->end ( ['message' => 'Unauthenticated'] );
    }

    $post = Post::find ($id);

    if ( !$post ) {
      $res->end (['message' => 'Post not Found']);
    }

    return [$post];
  }

  function admin () {}
}
