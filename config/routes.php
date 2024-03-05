<?php

namespace Application\Routes\Drawing {
  root ('auth:root@pages/index');

  // resource ('skills');

  // post ('/users/store', '@users/store');
  // get ('/users', '@users');

  group ('/', 'auth:root@pages', function () {
    get ('about');
    get ('portfolio');
    get ('blog');
    get ('contact');
    get ('hire');
  });

  // group ('/', 'private@pages', function () {
  //   get ('dashboard');
  // });

  // group ('/auth', 'private:auth@auth', function () {
  //   get ('login');
  //   post ('login', '/authenticate');
  //   get ('register');
  // });

  group('/portfolio/sites', '@portfolioes', function () {
    get('utk_site_design');
    get('zircon_site_design');
    get('banking_site_design');
    get('ubbio_site_design');
    get('fax_estate_site_design');
    get('designo_site_design');
    get('kear_site_design');
    get('gym_site_design');
    get('coffee_site_design');
  });

  // get ('/mytest', '@pages/mytest');
  // get ('/mytest/sam', '@pages\mytests/sam');
}
