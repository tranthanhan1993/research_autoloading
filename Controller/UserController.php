<?php

namespace App\Controller;

class UserController
{
    protected $name = 'an';

    public function showName($name = null)
    {
        echo $this->name;
        if (!empty($name)) {
            echo PHP_EOL . 'Name:' . $name;
        }
        echo PHP_EOL;
    }
}
