<?php

namespace AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use UsuarioBundle\Entity\Usuario;
use UsuarioBundle\Entity\Role;
use AdminBundle\Form\Frontend\AdminType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/login", name="admin_login")
     *
     * Muestra el formulario de login
     *
     * @return Response
     */
    public function loginAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('admin_usuarios'));
            //throw $this->createAccessDeniedException();
        }

        $authUtils = $this->get('security.authentication_utils');

        $response =  $this->render('AdminBundle:Default:login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
        ));
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);
        return $response;
    }
    /**
     * @Route("/login_check", name="admin_login_check")
     */
    public function loginCheckAction()
    {
        // el "login check" lo hace Symfony automáticamente
    }
    /**
     * @Route("/logout", name="admin_logout")
     */
    public function logoutAction()
    {
        // el logout lo hace Symfony automáticamente
    }

	/**
     * @Route("/registro", name="admin_registro")
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * Registra usuario logueado.
     *
     *
     * @return Response
     */
    public function registroAction(Request $request)
	{
		$usLog = $this->getUser();
		$usuario = new Usuario();
		$user = new Role();
		$user->setRole('ROLE_USUARIO');
		$admin = new Role();
		$admin->setRole('ROLE_ADMIN');
		
		$formulario = $this->createForm(AdminType::class, $usuario);
		if ($request->getMethod() === 'POST') {
			$formulario->handleRequest($request);
			if ($formulario->isValid()) {
				$encoder = $this->get('security.encoder_factory')
				->getEncoder($usuario);
				$usuario->setSalt(md5(time()));
				$passwordCodificado = $encoder->encodePassword(
				$usuario->getPassword(),
				$usuario->getSalt()
			);

			
			if ($formulario->get('adminC')->getData() == 'no') {
				$usuario->addRole($user);
				
			}else{
				$usuario->addRole($user);
				$usuario->addRole($admin);		
			}

			$user->setUsuarios($usuario);
			$admin->setUsuarios($usuario);
			$usuario->setPassword($passwordCodificado);
			$em = $this->getDoctrine()->getManager();
			$em->persist($usuario);
			$em->flush();
			
			}
            return $this->redirect($this->generateUrl('admin_registro'));
		}

		$response =  $this->render('AdminBundle:Default:registro.html.twig',
		array('formulario' => $formulario->createView()));

		$response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);

        return $response;
	}

    /**
     * @Route("/administrar", name="admin_usuarios")
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * Lista usuarios.
     *
     *
     * @return Response
     */
    public function administrarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('UsuarioBundle:Usuario')->findAll();

        $response =  $this->render('AdminBundle:Default:adminUsuarios.html.twig',
            array('usuarios' => $usuarios));

        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);

        return $response;
    }

	/**
     * @Route("/borrar/{id}", name="admin_borrar")
     * @Security("is_granted('ROLE_ADMIN')")
     * Borrar usuario.
     *
     *
     * @return Response
     */
    public function borrarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);

        $em->remove($usuario);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_usuarios'));
    }
}
