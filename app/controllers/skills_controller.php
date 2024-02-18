<?php
namespace {
  
  /**
   * SkillsController   * -
   * Controller that'll manage
   * the application basic requests
   */
  class SkillsController extends SamiController {
    function index ($req, $res) {
      $skills = Skill::map (function ($skill) {
        return array_merge ($skill->lean (), [
          'paragraphes' => $skill->getDetails ()
        ]);
      });

      $res->end ($skills);
    }

    function show ($req, $res) {
      $skill = Skill::find ();

      if (!$skill) {
        $res->status(404)->end([ 'message' => 'Skill not found' ]);
      }

      $skillData = array_merge ($skill->lean (), [
        'paragraphes' => $skill->details
      ]);

      $res->end ($skillData);
    }

    function store () {
      $skill = Skill::create (params ['skill']);

      return $skill;
    }

    // static function getStaticPaths () {
    //   return Skill::map (function ($skill) {
    //     return join ('/', ['', 'skills', $skill->id]);
    //   });
    // }
  }
}
