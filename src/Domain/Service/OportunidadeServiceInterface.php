<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 19/05/2018
 * Time: 14:07
 */

namespace Domain\Service;


use Domain\Model\Oportunidade;

interface OportunidadeServiceInterface
{

    /**
     * @param Oportunidade $oportunidade
     * @return void
     */
    public function salvar(Oportunidade $oportunidade);


}