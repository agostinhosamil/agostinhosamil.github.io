<?php
# @namespace Sami\Base
# The main scope for a SamiBase component
# wich should be used in the current scope
# as it self is.
namespace Sami\Base {
  use Clinter\Console;
  # skill Seeder Class
  # This is a way to organize
  # a little flux for creating
  # seeds inside the database.
  # The SamiBase name conventions
  # allow it self to auto configure
  # the database seeders and make each
  # one know the model that should be
  # pointed for the same.
  # EG: The curreent Seeder (skill[Seeder])
  # with automatically point to a Post model
  # in order having access for the crud and
  # other model method inside it.
  use skill;
  # If the seeder name does not match to the
  # model you want to, just uncomment the line
  # declaring a '$model' property and change the
  # value according to the model name.
  class SkillSeeder extends Seeder {
    # !Uncomment the line bellow to manually configure the model name
    # protected $model = 'skill';
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
      $skills = [
        [
          'title' => 'HTML5 & CSS3',
          'level' => 98, // %
          'color' => '#E34C26',
          'paragraphes' => [
            'Bootstrap',
            'Animate.css',
            'Jade',
            'Handlebars',
            'Capsule',
            'Stylus',
            'SASS'
          ],
        ],
        [
          'title' => 'PHP',
          'level' => 94, // %
          'color' => '#4F5D95',
          'paragraphes' => [
            'Samils',
            'Laravel',
            'Symfony',
            'WordPress',
            'CakePHP',
            'CodeIgniter',
            'PHP Module',
          ],
        ],
        [
          'title' => 'Javascript',
          'level' => 89, // %
          'color' => '#F1E05A',
          'paragraphes' => [
            'Node & Deno',
            'React & React Native',
            'Adonis',
            'Electron',
            'nextJS',
            'Angular & AngularJS',
            'VueJS',
          ],
        ],
        [
          'title' => 'Ruby',
          'level' => 48, // %
          'color' => '#701516',
          'paragraphes' => [
            'Ruby on Rails'
          ],
        ],
        [
          'title' => 'C#',
          'level' => 67, // %
          'color' => '#178600',
          'paragraphes' => [
            'Windows Form Application'
          ],
        ],
        [
          'title' => 'Graphic Design',
          'level' => 50, // %
          'color' => '#a7c1e3',
          'paragraphes' => [
            'Adobe Photoshop',
            'Adobe Illustrator'
          ],
        ]
      ];

      foreach ($skills as $skillData) {
        $skillData ['paragraphes'] = json_encode ($skillData ['paragraphes']);

        $skill = Skill::create ($skillData);

        Console::Success('created skill: ', $skill->title, "\n");
      }
    }
  }
}
