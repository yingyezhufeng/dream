<?php

namespace Dream\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dream\UserBundle\Form\Type\UsernameType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$userManager = $this->container->get('fos_user.user_manager');
    	$user = $userManager->findUserByUsernameOrEmail('zlb');

    	$form = $this->createForm(new UsernameType(), $user);
        return $this->render('DreamUserBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function loginAction(Request $request)
    {
    	
    }
}
