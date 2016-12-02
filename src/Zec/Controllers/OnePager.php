<?php
namespace Zec\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Zec\Models\HtmlHead;
use Zec\Models\ZecIdentity;

class OnePager
{
    public function bar(Request $request, Application $app)
    {
        $htmlHead = new HtmlHead();
        $identity = new ZecIdentity();
        return $app['twig']->render('base-package.html.twig', array(
            'htmlHead' => $htmlHead
        ));
    }
}
