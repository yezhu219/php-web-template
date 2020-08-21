<?php

namespace  app\index\controller;

use app\BaseController;

class Index extends  BaseController
{
    public  function hello() {
        return 'hello,index';
    }
}