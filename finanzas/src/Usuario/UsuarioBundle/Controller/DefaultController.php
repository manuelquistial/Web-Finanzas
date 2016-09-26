<?php

namespace Usuario\UsuarioBundle\Controller;
use Usuario\UsuarioBundle\Entity;
Use Sigep\SigepBundle\Entity\Movimientos;
Use Sigep\SigepBundle\Entity\Rubros;
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
        $em = $this->getDoctrine()->getManager('sigep');


        //Proyecto 140

        $qb14082474 = $em->createQueryBuilder();
        $qb14082474 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082474 ->where('m.proyecto = 140 AND m.rubro = 8247 AND m.tipo = 4 ');
        $val14082474  = $qb14082474->getQuery()->getResult();

        $qb14082484 = $em->createQueryBuilder();
        $qb14082484 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082484 ->where('m.proyecto = 140 AND m.rubro = 8248 AND m.tipo = 4 ');
        $val14082484  = $qb14082484->getQuery()->getResult();

        $qb14082494 = $em->createQueryBuilder();
        $qb14082494->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082494 ->where('m.proyecto = 140 AND m.rubro = 8249 AND m.tipo = 4 ');
        $val14082494  = $qb14082494->getQuery()->getResult();

        $qb14082504 = $em->createQueryBuilder();
        $qb14082504 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082504 ->where('m.proyecto = 140 AND m.rubro = 8250 AND m.tipo = 4 ');
        $val14082504  = $qb14082504->getQuery()->getResult();

        $qb14082473 = $em->createQueryBuilder();
        $qb14082473 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082473 ->where('m.proyecto = 140 AND m.rubro = 8247 AND m.tipo = 3 ');
        $val14082473  = $qb14082473->getQuery()->getResult();

        $qb14082483 = $em->createQueryBuilder();
        $qb14082483 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082483 ->where('m.proyecto = 140 AND m.rubro = 8248 AND m.tipo = 3 ');
        $val14082483  = $qb14082483->getQuery()->getResult();

        $qb14082493 = $em->createQueryBuilder();
        $qb14082493->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082493 ->where('m.proyecto = 140 AND m.rubro = 8249 AND m.tipo = 3 ');
        $val14082493  = $qb14082493->getQuery()->getResult();

        $qb14082503 = $em->createQueryBuilder();
        $qb14082503 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082503 ->where('m.proyecto = 140 AND m.rubro = 8250 AND m.tipo = 3 ');
        $val14082503  = $qb14082503->getQuery()->getResult();

        $qb14082472 = $em->createQueryBuilder();
        $qb14082472 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082472 ->where('m.proyecto = 140 AND m.rubro = 8247 AND m.tipo = 2 ');
        $val14082472  = $qb14082472->getQuery()->getResult();

        $qb14082482 = $em->createQueryBuilder();
        $qb14082482 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082482 ->where('m.proyecto = 140 AND m.rubro = 8248 AND m.tipo = 2 ');
        $val14082482  = $qb14082482->getQuery()->getResult();

        $qb14082492 = $em->createQueryBuilder();
        $qb14082492 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082492 ->where('m.proyecto = 140 AND m.rubro = 8249 AND m.tipo = 2 ');
        $val14082492  = $qb14082492->getQuery()->getResult();

        $qb14082502 = $em->createQueryBuilder();
        $qb14082502 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14082502 ->where('m.proyecto = 140 AND m.rubro = 8250 AND m.tipo = 2 ');
        $val14082502  = $qb14082502->getQuery()->getResult();



        //Proyecto 141

        $qb14182514 = $em->createQueryBuilder();
        $qb14182514 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182514 ->where('m.proyecto = 141 AND m.rubro = 8251 AND m.tipo = 4 ');
        $val14182514  = $qb14182514->getQuery()->getResult();

        $qb14182524 = $em->createQueryBuilder();
        $qb14182524 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182524 ->where('m.proyecto = 141 AND m.rubro = 8252 AND m.tipo = 4 ');
        $val14182524  = $qb14182524->getQuery()->getResult();

        $qb14182534 = $em->createQueryBuilder();
        $qb14182534->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182534 ->where('m.proyecto = 141 AND m.rubro = 8253 AND m.tipo = 4 ');
        $val14182534  = $qb14182534->getQuery()->getResult();

        $qb14182544 = $em->createQueryBuilder();
        $qb14182544 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182544 ->where('m.proyecto = 141 AND m.rubro = 8254 AND m.tipo = 4 ');
        $val14182544  = $qb14182544->getQuery()->getResult();

        $qb14182513 = $em->createQueryBuilder();
        $qb14182513 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182513 ->where('m.proyecto = 141 AND m.rubro = 8251 AND m.tipo = 3 ');
        $val14182513  = $qb14182513->getQuery()->getResult();

        $qb14182523 = $em->createQueryBuilder();
        $qb14182523 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182523 ->where('m.proyecto = 141 AND m.rubro = 8252 AND m.tipo = 3 ');
        $val14182523  = $qb14182523->getQuery()->getResult();

        $qb14182533 = $em->createQueryBuilder();
        $qb14182533->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182533 ->where('m.proyecto = 141 AND m.rubro = 8253 AND m.tipo = 3 ');
        $val14182533  = $qb14182533->getQuery()->getResult();

        $qb14182543 = $em->createQueryBuilder();
        $qb14182543 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182543 ->where('m.proyecto = 141 AND m.rubro = 8254 AND m.tipo = 3 ');
        $val14182543  = $qb14182543->getQuery()->getResult();

        $qb14182512 = $em->createQueryBuilder();
        $qb14182512 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182512 ->where('m.proyecto = 141 AND m.rubro = 8251 AND m.tipo = 2 ');
        $val14182512  = $qb14182512->getQuery()->getResult();

        $qb14182522 = $em->createQueryBuilder();
        $qb14182522 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182522 ->where('m.proyecto = 141 AND m.rubro = 8252 AND m.tipo = 2 ');
        $val14182522  = $qb14182522->getQuery()->getResult();

        $qb14182532 = $em->createQueryBuilder();
        $qb14182532 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182532 ->where('m.proyecto = 141 AND m.rubro = 8253 AND m.tipo = 2 ');
        $val14182532  = $qb14182532->getQuery()->getResult();

        $qb14182542 = $em->createQueryBuilder();
        $qb14182542 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14182542 ->where('m.proyecto = 141 AND m.rubro = 8254 AND m.tipo = 2 ');
        $val14182542  = $qb14182542->getQuery()->getResult();



        //Proyecto 143

        $qb14382574 = $em->createQueryBuilder();
        $qb14382574 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14382574 ->where('m.proyecto = 143 AND m.rubro = 8257 AND m.tipo = 4 ');
        $val14382574  = $qb14382574->getQuery()->getResult();

        $qb14382584 = $em->createQueryBuilder();
        $qb14382584 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14382584 ->where('m.proyecto = 143 AND m.rubro = 8258 AND m.tipo = 4 ');
        $val14382584  = $qb14382584->getQuery()->getResult();

        $qb14382573 = $em->createQueryBuilder();
        $qb14382573 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14382573 ->where('m.proyecto = 143 AND m.rubro = 8257 AND m.tipo = 3 ');
        $val14382573  = $qb14382573->getQuery()->getResult();

        $qb14382583 = $em->createQueryBuilder();
        $qb14382583 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14382583 ->where('m.proyecto = 143 AND m.rubro = 8258 AND m.tipo = 3 ');
        $val14382583  = $qb14382583->getQuery()->getResult();

        $qb14382572 = $em->createQueryBuilder();
        $qb14382572 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14382572 ->where('m.proyecto = 143 AND m.rubro = 8257 AND m.tipo = 2 ');
        $val14382572  = $qb14382572->getQuery()->getResult();

        $qb14382582 = $em->createQueryBuilder();
        $qb14382582 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14382582 ->where('m.proyecto = 143 AND m.rubro = 8258 AND m.tipo = 2 ');
        $val14382582  = $qb14382582->getQuery()->getResult();

        

        //Proyecto 139

        $qb13982444 = $em->createQueryBuilder();
        $qb13982444 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982444 ->where('m.proyecto = 139 AND m.rubro = 8244 AND m.tipo = 4 ');
        $val13982444  = $qb13982444->getQuery()->getResult();

        $qb13982454 = $em->createQueryBuilder();
        $qb13982454 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982454 ->where('m.proyecto = 139 AND m.rubro = 8245 AND m.tipo = 4 ');
        $val13982454  = $qb13982454->getQuery()->getResult();

        $qb13982464 = $em->createQueryBuilder();
        $qb13982464->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982464 ->where('m.proyecto = 139 AND m.rubro = 8246 AND m.tipo = 4 ');
        $val13982464  = $qb13982464->getQuery()->getResult();

        $qb13982443 = $em->createQueryBuilder();
        $qb13982443 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982443 ->where('m.proyecto = 139 AND m.rubro = 8244 AND m.tipo = 3 ');
        $val13982443  = $qb13982443->getQuery()->getResult();

        $qb13982453 = $em->createQueryBuilder();
        $qb13982453 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982453 ->where('m.proyecto = 139 AND m.rubro = 8245 AND m.tipo = 3 ');
        $val13982453  = $qb13982453->getQuery()->getResult();

        $qb13982463 = $em->createQueryBuilder();
        $qb13982463->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982463 ->where('m.proyecto = 139 AND m.rubro = 8246 AND m.tipo = 3 ');
        $val13982463  = $qb13982463->getQuery()->getResult();

        $qb13982442 = $em->createQueryBuilder();
        $qb13982442 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982442 ->where('m.proyecto = 139 AND m.rubro = 8244 AND m.tipo = 2 ');
        $val13982442  = $qb13982442->getQuery()->getResult();

        $qb13982452 = $em->createQueryBuilder();
        $qb13982452 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982452 ->where('m.proyecto = 139 AND m.rubro = 8245 AND m.tipo = 2 ');
        $val13982452  = $qb13982452->getQuery()->getResult();

        $qb13982462 = $em->createQueryBuilder();
        $qb13982462 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb13982462 ->where('m.proyecto = 139 AND m.rubro = 8246 AND m.tipo = 2 ');
        $val13982462  = $qb13982462->getQuery()->getResult();



        //Proyecto 144

        $qb14482594 = $em->createQueryBuilder();
        $qb14482594 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482594 ->where('m.proyecto = 144 AND m.rubro = 8259 AND m.tipo = 4 ');
        $val14482594  = $qb14482594->getQuery()->getResult();

        $qb14482604 = $em->createQueryBuilder();
        $qb14482604 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482604 ->where('m.proyecto = 144 AND m.rubro = 8260 AND m.tipo = 4 ');
        $val14482604  = $qb14482604->getQuery()->getResult();

        $qb14482614 = $em->createQueryBuilder();
        $qb14482614->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482614 ->where('m.proyecto = 144 AND m.rubro = 8261 AND m.tipo = 4 ');
        $val14482614  = $qb14482614->getQuery()->getResult();

        $qb14482624 = $em->createQueryBuilder();
        $qb14482624 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482624 ->where('m.proyecto = 144 AND m.rubro = 8262 AND m.tipo = 4 ');
        $val14482624  = $qb14482624->getQuery()->getResult();

        $qb14482593 = $em->createQueryBuilder();
        $qb14482593 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482593 ->where('m.proyecto = 144 AND m.rubro = 8259 AND m.tipo = 3 ');
        $val14482593  = $qb14482593->getQuery()->getResult();

        $qb14482603 = $em->createQueryBuilder();
        $qb14482603 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482603 ->where('m.proyecto = 144 AND m.rubro = 8260 AND m.tipo = 3 ');
        $val14482603  = $qb14482603->getQuery()->getResult();

        $qb14482613 = $em->createQueryBuilder();
        $qb14482613->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482613 ->where('m.proyecto = 144 AND m.rubro = 8261 AND m.tipo = 3 ');
        $val14482613  = $qb14482613->getQuery()->getResult();

        $qb14482623 = $em->createQueryBuilder();
        $qb14482623 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482623 ->where('m.proyecto = 144 AND m.rubro = 8262 AND m.tipo = 3 ');
        $val14482623  = $qb14482623->getQuery()->getResult();

        $qb14482592 = $em->createQueryBuilder();
        $qb14482592 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482592 ->where('m.proyecto = 144 AND m.rubro = 8259 AND m.tipo = 2 ');
        $val14482592  = $qb14482592->getQuery()->getResult();

        $qb14482602 = $em->createQueryBuilder();
        $qb14482602 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482602 ->where('m.proyecto = 144 AND m.rubro = 8260 AND m.tipo = 2 ');
        $val14482602  = $qb14482602->getQuery()->getResult();

        $qb14482612 = $em->createQueryBuilder();
        $qb14482612 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482612 ->where('m.proyecto = 144 AND m.rubro = 8261 AND m.tipo = 2 ');
        $val14482612  = $qb14482612->getQuery()->getResult();

        $qb14482622 = $em->createQueryBuilder();
        $qb14482622 ->select('m.valor')
            ->from('SigepBundle:Movimientos', 'm');
        $qb14482622 ->where('m.proyecto = 144 AND m.rubro = 8262 AND m.tipo = 2 ');
        $val14482622  = $qb14482622->getQuery()->getResult();




		$response = $this->render('UsuarioBundle:Default:finanzas.html.twig', array('val14082472' => $val14082472, 'val14082482' => $val14082482, 'val14082492' => $val14082492, 'val14082502' => $val14082502, 'val14082473' => $val14082473, 'val14082483' => $val14082483, 'val14082493' => $val14082493, 'val14082503' => $val14082503, 'val14082474' => $val14082474, 'val14082484' => $val14082484, 'val14082494' => $val14082494, 'val14082504' => $val14082504, 'val14182512' => $val14182512, 'val14182522' => $val14182522, 'val14182532' => $val14182532, 'val14182542' => $val14182542, 'val14182513' => $val14182513, 'val14182523' => $val14182523, 'val14182533' => $val14182533, 'val14182543' => $val14182543, 'val14182514' => $val14182514, 'val14182524' => $val14182524, 'val14182534' => $val14182534, 'val14182544' => $val14182544, 'val14382572' => $val14382572, 'val14382582' => $val14382582, 'val14382573' => $val14382573, 'val14382583' => $val14382583, 'val14382574' => $val14382574, 'val14382584' => $val14382584, 'val13982442' => $val13982442, 'val13982452' => $val13982452, 'val13982462' => $val13982462, 'val13982443' => $val13982443, 'val13982453' => $val13982453, 'val13982463' => $val13982463, 'val13982444' => $val13982444, 'val13982454' => $val13982454, 'val13982464' => $val13982464, 'val14482592' => $val14482592, 'val14482602' => $val14482602, 'val14482612' => $val14482612, 'val14482622' => $val14482622, 'val14482593' => $val14482593, 'val14482603' => $val14482603, 'val14482613' => $val14482613, 'val14482623' => $val14482623, 'val14482594' => $val14482594, 'val14482604' => $val14482604, 'val14482614' => $val14482614, 'val14482624' => $val14482624));
        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);

        return $response;

    }
}
