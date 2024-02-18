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

  group('/portfolio/sites', '@portfolios', function () {
    get('utk_site_design');
    get('zircon_site_design');
  });

  // get ('/mytest', '@pages/mytest');
  // get ('/mytest/sam', '@pages\mytests/sam');
}
