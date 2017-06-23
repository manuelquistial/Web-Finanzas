<?php

namespace UsuarioBundle\Controller;
use UsuarioBundle\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="usuario_login")
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

        $tU = 0;
        $tD = 0;
        $tT = 0;
        $tD39 = 0;
        $tT39 = 0;
        $tD142 = 0;
        $tT142 = 0;

        $em = $this->getDoctrine()->getManager('sigep');

        $query = $em->createQuery(
            "SELECT SUM(m.valor)
            FROM SigepBundle:Movimientos m
            WHERE m.proyecto 
            IN (138, 139, 140, 141, 142, 143, 144, 145, 39)
            AND m.tipo = 1"
        );

        $tipoU = $query->getResult();

        foreach ($tipoU as $value) {
            $tU = $value[1];
        }

        $query = $em->createQuery(
            "SELECT SUM(m.valor), (m.tipo)
            FROM SigepBundle:Movimientos m
            INNER JOIN SigepBundle:Rubros r
            WITH m.rubro = r.codigo
            WHERE r.padre = 31 AND m.proyecto 
            IN (138, 139, 140, 141, 143, 144, 145)
            GROUP BY m.tipo"
        );

        $tipoDT = $query->getResult();

        $query = $em->createQuery(
            "SELECT (m.valor), (m.tipo)
            FROM SigepBundle:Movimientos m
            WHERE m.rubro IN (8277, 8278, 8279, 8280) AND m.proyecto = 39"
        );

        $valor39 = $query->getResult();

        $query = $em->createQuery(
            "SELECT (m.valor), (m.tipo)
            FROM SigepBundle:Movimientos m
            WHERE m.rubro IN (8255, 8256) AND m.proyecto = 142"
        );

        $valor142 = $query->getResult();

        foreach ($valor39 as $value) {
            if($value[2] == 2){
                $tD39 = $tD39 + $value[1];
            }else if($value[2] == 3){
                $tT39 = $tT39 + $value[1];
            }
        }

        foreach ($valor142 as $value) {
            if($value[2] == 2){
                $tD142 = $tD142 + $value[1];
            }else if($value[2] == 3){
                $tT142 = $tT142 + $value[1];
            }
        }

        foreach ($tipoDT as $value) {
            if($value[2] == 2){
                $tD = $value[1];
            }else if($value[2] == 3){
                $tT = $value[1];
            }
        }

        $total = $tU - ($tD + $tT + $tD39 + $tT39 + $tT142 + $tD142);

        $response = $this->render('UsuarioBundle:Default:finanzas.html.twig', array('total' => $total));

        $response->headers->addCacheControlDirective('no-cache', true);
        $response->headers->addCacheControlDirective('max-age', 0);
        $response->headers->addCacheControlDirective('must-revalidate', true);
        $response->headers->addCacheControlDirective('no-store', true);

        return $response;
    }

    /**
     * Consulta rubros.
     *
     * @Route("/finanzas/datos", name="datos_finanzas")
     * @Security("is_granted('ROLE_USUARIO')")
     * @Method("POST")
     *
     */
    public function postAction(Request $request)
    {

        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'You can access this only using Ajax!'), 400);
        }

        $pro = $request->request->get('id');

        $em = $this->getDoctrine()->getManager('sigep');

        $query = $em->createQuery(
            "SELECT (p.nombre)
            FROM SigepBundle:Proyectos p
            WHERE p.codigo = $pro"
        );

        $projects = $query->getResult();

        if($pro == 39){
            $query = $em->createQuery(
                "SELECT (r.nombre), (r.codigo)
                FROM SigepBundle:Rubros r
                WHERE r.codigo IN (8277, 8278, 8279, 8280) AND r.proyecto = 39
                GROUP BY r.codigo"
            );

            $rubro = $query->getResult();

            $query = $em->createQuery(
                "SELECT (r.codigo), (m.valor), (m.tipo)
                FROM SigepBundle:Movimientos m
                INNER JOIN SigepBundle:Rubros r
                WITH m.rubro = r.codigo
                WHERE r.codigo IN (8277, 8278, 8279, 8280) AND r.proyecto = 39"
            );

            $valor = $query->getResult();

        }else if($pro == 142){

            $query = $em->createQuery(
                "SELECT (r.nombre), (r.codigo)
                FROM SigepBundle:Rubros r
                WHERE r.codigo IN (8255, 8256) AND r.proyecto = 142
                GROUP BY r.codigo"
            );

            $rubro = $query->getResult();

            $query = $em->createQuery(
                "SELECT (r.codigo), (m.valor), (m.tipo)
                FROM SigepBundle:Movimientos m
                INNER JOIN SigepBundle:Rubros r
                WITH m.rubro = r.codigo
                WHERE r.codigo IN (8255, 8256) AND r.proyecto = 142"
            );

            $valor = $query->getResult();

        }else{
            $query = $em->createQuery(
                "SELECT (r.nombre), (r.codigo)
                FROM SigepBundle:Rubros r
                WHERE r.padre = 31 AND r.proyecto = $pro
                GROUP BY r.codigo"
            );

            $rubro = $query->getResult();

            $query = $em->createQuery(
                "SELECT (r.codigo), (m.valor), (m.tipo)
                FROM SigepBundle:Movimientos m
                INNER JOIN SigepBundle:Rubros r
                WITH m.rubro = r.codigo
                WHERE r.padre = 31 AND r.proyecto = $pro"
            );

            $valor = $query->getResult();
        }

        $query = $em->createQuery(
            "SELECT SUM(m.valor)
            FROM SigepBundle:Movimientos m
            WHERE m.tipo = 1 AND m.proyecto = $pro"
        );

        $ingreso = $query->getResult();

        $response = new JsonResponse(array('rubro' => $rubro, 'valor' => $valor, 'project' => $projects, 'ingreso' => $ingreso), 200);

        //$response = new JsonResponse(array('pro'=>$pro), 200);

        return $response;
    }
}
