<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 12/05/2018
 * Time: 15:06
 */

namespace AppBundle\Controller;


use Domain\Model\Oportunidade;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class OportunidadeController extends Controller {

    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function salvarAction(Request $request){
        $serializerService = $this->get('infra.serializer.service');
        $oportunidadeService = $this->get('app.oportunidade.service');

        try{
            $oportunidade = $serializerService->converter($request->getContent(), Oportunidade::class);
            $oportunidadeService->salvar($oportunidade);
        }catch(\Exception $exception) {
            return new Response($exception->getMessage(), 400);
        }
       return new Response("operação concluída com sucesso !!");

    }


    /**
     * @Route("/oportunidade/listar")
     */
    public function getOportunidadeAction()
    {

        $opotunidadeService = $this->get('app.oportunidade.service');
        $serializeService = $this->get('infra.serializer.service');
        try{
           $oportunidades = $opotunidadeService->listarTudo();
        }catch(\Exception $exception){
            return new Response($exception->getMessage(), 400);
        }
        return new Response($serializeService->toJsonGroups($oportunidades));

    }


}