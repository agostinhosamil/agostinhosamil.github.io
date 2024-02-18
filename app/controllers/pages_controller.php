<?php
/**
 * PagesController * -
 * Controller that'll manage
 * the application basic requests
 */
class PagesController extends SamiController {

  function mytest () {
    $this->message = 'Hello, This is my test! :)';
  }

  /**
   * @method void index
   */
  function index () {
    $this->selected = true;

    $this->skills = Skill::readLines (3);

    $this->portfolioProjects = $this->allProjects ();

    $this->hirePlans = $this->allHirePlans ();
  }

  function about () {
    $this->textSets = [
      [
        "title" => 'Self Introduction',
        'color' => 'blue',

        'paragraphs' => [
          'I am Agostinho Sambo Lopes (Sam), fullstack developer for over eight years and for about ten years working with frontend development particularly [as a freelancer] while working for a service providing company as a backend developer and assistent database manager.',
          'I am African, national of Angola, I live in the capital (Luanda) for almost my entire life (I lived in the north until very young ... When about four years old) with my parents and siblings.',
          'I am a former student of Legal and Economic Sciences (High School Completed), I study privately: Mathematics, Logic and Computer Programming (Where I decided to focus my career).',
          'I have devoted much of my time to studies through didactics; I sought to learn more about languages and mathematics while teaching people with less or equal knowledge than me.',
          'So, for some time I worked as a teacher of English and Mathematics while learning French at a vocational training center.'
        ]
      ],
      [
        "title" => 'Experience Description',
        'color' => 'red',

        'paragraphs' => [
          'As a Web Developer, I have been working with programming languages ​​like php, javascript and Ruby. I am very focused on functionality and integrity issues in web systems, always trying to understand how to integrate and reintegrate part of them in systems and systems development tools that I have developed based on existing ones.',
          'I have always tried to learn and put into practice different technologies and forms of technologies so that I have been looking for a long time to learn and consume content related to a large number of existing tools in the market ... I am a fulltack programmer [, more focused on backend development], I am a developer of frameworks and development tools, as I said before, I always try to learn about the various technologies that exist in the market, so I try to get to know them by reimplementing certain concepts and philosophies within them, I spend a good part of my time finding a way to improve each feature in each system I find, always finding a way to know what else there is to know about them.',
          'So far, I worked as a backend programmer in the languages: php and Javascript (nodeJS). And in personal and non-commercial projects I have worked on both the frontend and backend and in the development of windows applications (Desktop).'
        ]
      ]
    ];

    $this->myName ='Sam';
  }

  function portfolio () {
    $this->portfolioProjects = $this->allProjects ();
  }

  function blog () {}

  function contact () {}

  function message () {}

  function hire () {
    $this->hirePlans = $this->allHirePlans ();
  }

  function dashboard () {}

  private function allProjects () {
    return [
      [
        [
          'url' => 'https://sounp.vercel.app',
          'githubUrl' => 'https://github.com/agostinhosamil/sounp',
          'thumbnail' => 'sounya-website-template.png'
        ],
        [
          'url' => '/portfolio/sites/belonistore/index.html',
          'githubUrl' => 'https://github.com/agostinhosamil/belonistore',
          'thumbnail' => 'beloni-site.png'
        ]
      ],
      [
        [
          'url' => '/portfolio/sites/utk_site_design/index.html',
          'githubUrl' => 'https://github.com/agostinhosamil/utk_site_design',
          'thumbnail' => 'utk-site.png'
        ],
        [
          'url' => '/portfolio/sites/axell-website-template/index.html',
          'githubUrl' => 'https://github.com/agostinhosamil/agostinhosamil.github.io/docs/portfolio/sites/axell-website-template',
          'thumbnail' => 'axell-website-template.png'
        ]
      ],
      [
        [
          'url' => '/portfolio/sites/cr7-website-template/index.html',
          'githubUrl' => 'https://github.com/agostinhosamil/agostinhosamil.github.io',
          'thumbnail' => 'cr7-site.png'
        ],
        [
          'url' => '/portfolio/sites/zircon_site_design/index.html',
          'githubUrl' => 'https://github.com/agostinhosamil/agostinhosamil.github.io',
          'thumbnail' => 'zircon-website-template.png'
        ]
      ]
    ];
  }

  private function allHirePlans () {
    /*
      1 Day Delivery
      3 Revisions
      5 pages
      Design customization
      Content upload
      Responsive design

     */
    return [
      [
        [
          'title' => "Basic",
          'icon' => "icon-plan-p.svg",
          'color' => "blue",
          'price' => 70,
          'details' => [
            [
              'label' => 'Source code',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Responsive design',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Content upload',
              'enabled' => false,
              'value' => ''
            ],
            [
              'label' => 'Design customization',
              'enabled' => false,
              'value' => ''
            ],
            [
              'label' => 'Pages',
              'enabled' => true,
              'value' => '1-5'
            ],
            [
              'label' => 'Revisions',
              'enabled' => true,
              'value' => '1'
            ],
            [
              'label' => 'Delivery',
              'enabled' => true,
              'value' => '4 days'
            ]
          ]
        ],
        [
          'title' => "Standard",
          'icon' => "icon-plan-m.svg",
          'color' => "yellow",
          'price' => 320,
          'details' => [
            [
              'label' => 'Source code',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Responsive design',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Content upload',
              'enabled' => false,
              'value' => ''
            ],
            [
              'label' => 'Design customization',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Pages',
              'enabled' => true,
              'value' => '5-15'
            ],
            [
              'label' => 'Revisions',
              'enabled' => true,
              'value' => '6'
            ],
            [
              'label' => 'Delivery',
              'enabled' => true,
              'value' => '14 days'
            ]
          ]
        ],
        [
          'title' => "Premium",
          'icon' => "icon-plan-turbo.svg",
          'color' => "orange",
          'price' => 470,
          'details' => [
            [
              'label' => 'Source code',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Responsive design',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Content upload',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Design customization',
              'enabled' => true,
              'value' => ''
            ],
            [
              'label' => 'Pages',
              'enabled' => true,
              'value' => '8-25'
            ],
            [
              'label' => 'Revisions',
              'enabled' => true,
              'value' => 'Unlimited'
            ],
            [
              'label' => 'Delivery',
              'enabled' => true,
              'value' => '26 days'
            ]
          ]
        ]
      ]
    ];
  }
}
