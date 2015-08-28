<?php

namespace Dream\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$userManager = $this->container->get('fos_user.user_manager');
    	$user = $userManager->createUser();
    	$user->setUsername('John');
    	$user->setPassword('123456');
		$user->setEmail('john.doe@example.com');

		$userManager->updateUser($user);
        return $this->render('DreamWebBundle:Default:index.html.twig');
    }
}
