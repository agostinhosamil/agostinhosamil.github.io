<?php
class Skill extends Sami\Base {
  /**
   *
   */
  function constructor () {}

  function getDetails () {
    return json_decode ($this->paragraphes);
  }

  static function beforeCreate ($skill) {
    if (is_array ($skill->paragraphes)) {
      $skill->paragraphes = json_encode ($skill->paragraphes);
    }
  }
}
