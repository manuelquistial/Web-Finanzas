<?php

namespace Usuario\UsuarioBundle\Controller;
use Usuario\UsuarioBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Route("/usuario")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/login", name="usuario_login")
     *
     * Muestra el formulario de login
     *
     * @return Response
     */
    public function loginAction()
    {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('usuario_finanzas'));
            //throw $this->createAccessDeniedException();
        }

        $authUtils = $this->get('security.authentication_utils');

        $response =  $this->render('UsuarioBundle:Default:login.html.twig', array(
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
     * @Cache(maxage="30")
     *
     * Muestra la caja de login que se incluye en el lateral de la mayoría de 			páginas del sitio web.
     * Esta caja se transforma en información y enlaces cuando el usuario se 			loguea en la aplicación.
     * La respuesta se marca como privada para que no se añada a la cache 			pública. El trozo de plantilla
     * que llama a esta función se sirve a través de ESI.
     *
     * @return Response
     */
    public function cajaLoginAction()
    {
        $usuario = $this->get('security.token_storage')->getToken();
        if($usuario == null){
			echo("hola2");
			return $this->render('UsuarioBundle:Default:_caja_login.html.twig');
		}else{
			echo("hola3");
			$usuario = $usuario->getUser();
			return $this->render('UsuarioBundle:Default:_caja_login.html.twig', array(
            'usuario' => $usuario,));
		}
    }

    /**
     * @Route("/login_check", name="usuario_login_check")
     */
    public function loginCheckAction()
    {
        // el "login check" lo hace Symfony automáticamente
    }
    /**
     * @Route("/logout", name="usuario_logout")
     */
    public function logoutAction()
    {
        // el logout lo hace Symfony automáticamente
    }

	/**
     * @Route("/finanzas", name="usuario_finanzas")
     * @Security("is_granted('ROLE_USUARIO')")
     *
     * Registra usuario logueado.
     *
     *
     * @return Response
     */
    public function finanzasAction()
    {
		$response = $this->render('UsuarioBundle:Default:finanzas.html.twig');
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);

        return $response;

    }
}
