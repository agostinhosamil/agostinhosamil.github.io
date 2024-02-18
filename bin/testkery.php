<?php

use Sammy\Packs\Sami\CommandLineInterface\Console;
use Sammy\Packs\Sami\CommandLineInterface\Parameters;
use Sammy\Packs\Kery\MySQL as Kery;
use Sammy\Packs\Kery\Config;

$module->exports = [
  'name' => 'map',
  'handler' => function (Parameters $parameters) {

    #Config::primaryKeyMap (['post' => 'author']);

    // $users = Kery::read ('users', [
    //   'key',
    //   'name',
    //   'email',
    //   'password',

    //   'post' => [
    //     'key',
    //     'title',
    //     'content',

    //     'comments' => [
    //       'key',
    //       'content',

    //       'replies' => [
    //         'key',
    //         'content',

    //         'replies' => [
    //           'key',
    //           'content'
    //         ]
    //       ]
    //     ]
    //   ],

    //   'token' => [
    //     'id',
    //     'data',
    //     'expiresDate',

    //     'date' => [
    //       'date'
    //     ]
    //   ]
    // ]);

    // $users = Kery::read ('user', [
    //   'name',
    //   'email',

    //   'post' => [
    //     'id',
    //     'title',
    //     'body'
    //   ]
    // ]);

    // Console::log ("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", $users);

    // $query = Kery::read ('plan', [
    //   'key',
    //   'title',
    //   'icon',
    //   'color',
    //   'price',
    //   'details',

    //   'detail' => [
    //     'key',
    //     'label',
    //     'enabled',
    //     'value'
    //   ]
    // ]);

    $query = Kery::read ('user', [
      'name',
      'email',
      'id',

      'post' => [
        'id',
        'body'
      ]
    ]);

    $conn = new PDO ('mysql:host=localhost;dbname=agostinho_samil_development_db', 'root', '');

    $preQuery = $conn->prepare ($query);

    $configCompiler = requires ('gogue-plugin-config-compiler');

    if ($preQuery->execute ()) {

      while ($data = $preQuery->fetch(PDO::FETCH_ASSOC)) {
        print_r($configCompiler ($data));
        echo "\n\n";
      }

    }

    Console::log ("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n", $query);
  }
];
