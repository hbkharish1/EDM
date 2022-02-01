<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
      'text' => 'Navigation',
      'is_header' => true
    ],[
      'url' => '/',
      'icon' => 'fa fa-laptop',
      'text' => 'Dashboard'
    ], [
      'url' => 'userlist',
      'icon' => 'fas fa-users',
      'text' => 'Users'
    ],[
      'url' => 'search-history',
      'icon' => 'fas fa-history',
      'text' => 'Search History'
    ], [
      'icon' => 'fas fa-server',
      'text' => 'Bank Database',
      'children' => [[
          'url' => '/banks/senior_financing',
          'text' => 'Senior Financing'
        ], [
          'url' => '/banks/mezzanine_financing',
          'text' => 'Mezzanine Financing'
        ]]
    ],  [
      'is_divider' => true
    ], [
      'text' => 'Site Management ',
      'is_header' => true
    ], [
      'url' => '/settings',
      'icon' => 'fa fa-cog',
      'text' => 'Settings'
    ],[
      'url' => '/logout',
      'icon' => 'fa fa-sign-out-alt',
      'text' => 'Logout'
      
    ]
  ]
];