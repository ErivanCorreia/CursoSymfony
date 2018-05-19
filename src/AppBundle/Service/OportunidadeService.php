<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 19/05/2018
 * Time: 14:14
 */

namespace AppBundle\Service;


use Domain\Model\Oportunidade;
use Domain\Repository\OportunidadeRepositoryInterface;
use Domain\Service\OportunidadeServiceInterface;

class OportunidadeService implements OportunidadeServiceInterface
{
    /**
     * @var OportunidadeRepositoryInterface
     */
    private $oportunidadeRepository;

    /**
     * OportunidadeService constructor.
     * @param OportunidadeRepositoryInterface $oportunidadeRepository
     */
    public function __construct(OportunidadeRepositoryInterface $oportunidadeRepository)
    {
        $this->oportunidadeRepository = $oportunidadeRepository;
    }


    /**
     * @param Oportunidade $oportunidade
     * @return void
     */
    public function salvar(Oportunidade $oportunidade)
    {
        $this->oportunidadeRepository->salvar($oportunidade);
    }
}