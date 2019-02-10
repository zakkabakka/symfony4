<?php
/**
 * Created by PhpStorm.
 * User: zkherfi
 * Date: 10/02/2019
 * Time: 14:12
 */

namespace App\Controller;


class DefaultController
{

    public function indexAction()
    {
        return $this->render('BayardAdminBundle:Notification:list.html.twig');
    }
}