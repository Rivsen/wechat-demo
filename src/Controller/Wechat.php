<?php

namespace Rswork\Silex\Controller;

use Rswork\Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Wechat extends Base
{
    public function index( Request $request, Application $app )
    {
        $wechat = $app['wechat'];
        return $this->render( 'wechat/index.html.twig', array( 'wechat' => $wechat ) );
    }
}
