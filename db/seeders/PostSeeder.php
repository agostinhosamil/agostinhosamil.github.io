<?php
# @namespace Sami\Base
# The main scope for a SamiBase component
# wich should be used in the current scope
# as it self is.
namespace Sami\Base {
  # post Seeder Class
  # This is a way to organize
  # a little flux for creating
  # seeds inside the database.
  # The SamiBase name conventions
  # allow it self to auto configure
  # the database seeders and make each
  # one know the model that should be
  # pointed for the same.
  # EG: The curreent Seeder (post[Seeder])
  # with automatically point to a Post model
  # in order having access for the crud and
  # other model method inside it.
  use Post;
  # If the seeder name does not match to the
  # model you want to, just uncomment the line
  # declaring a '$model' property and change the
  # value according to the model name.
  class PostSeeder extends Seeder {
    # !Uncomment the line bellow to manually configure the model name
    # protected $model = 'post';
    # Magic method to be executed
    # when running the current Seeder
    # by any valid caller for the
    # SamiBase DataBase Seeders.
    # ---
    # SamiBase'll not throw an exception
    # if the 'run' method be not found,
    # it'll just ignore it and keep its
    # cicle.
    function run () {
      $i = 0;

      $lorem = requires ('lorem-ipsum');
      $token = requires ('sami-tokens');

      while ($i++ < 15) {
        Post::Create ([
          'title' => $lorem->generateWords (rand (4, 15)),
          "body" => $lorem->print (rand (1, 7)),
          "user_id" => 7
        ]);
      }
    }
  }
}
