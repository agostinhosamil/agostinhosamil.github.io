<?php

class PortfolioesController extends SamiController {
  function utk_site_design ($req, $res) {
    $this->colors = [
      'red',
      'yellow',
      'green',
      'blue',
      'orange',
      'teal'
    ];
  }

  function zircon_site_design () {}

  function banking_site_design () {}

  function ubbio_site_design () {}

  function fax_estate_site_design () {}

  function designo_site_design () {}

  function kear_site_design () {}

  function gym_site_design () {
    $this->days = [
      'Monday',
      'Tuesday',
      'Wedsneday',
      'Thursday',
      'Friday',
      'Saturday'
    ];
  }

  function coffee_site_design () {

    $callback = function ($id) {
      return [
        'id' => $id,
        'photo' => 'photo.jpg',
        'name' => 'Customer Number ' . $id,
        'rate' => rand(rand(1, 5), 5),
        'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
      ];
    };

    $this->testimonials = array_map ($callback, range(1, 100));
  }
}
