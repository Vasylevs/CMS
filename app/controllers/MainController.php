<?php

namespace app\controllers;

use cms\core\Cache;
use core\App;

class MainController extends AppController
{


    public function indexAction(){
        $this->setMeta(App::$app->getProperty('store_name'), 'DESCRIPTION', 'KEYWORDS');
        $posts = \R::findAll('test');
        $names = ['Vasyl', 'Nastya'];
        $cache = Cache::instance();
        $cache->set('test',$names);
        $data = $cache->get('test');
        $this->set(compact('posts','data'));
    }

}