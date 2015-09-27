<?php

namespace Bolt\Extension\MalangPHP\Joindin;

use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function initialize()
    {
        $this->addTwigFuction('md5', 'calculateMd5');
    }

    public function calculateMd5($string = '')
    {
        return md5($string);
    }
}
