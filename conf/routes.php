<?php

use cms\core\Router;



//default
Router::add('^manager$',['controller' => 'Main', 'action' => 'index', 'prefix' => 'manager']);
Router::add('^manager/(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'manager']);

Router::add('^$',['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');