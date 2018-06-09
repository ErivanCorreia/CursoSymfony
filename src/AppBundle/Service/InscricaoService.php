<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 09/06/2018
 * Time: 11:46
 */

namespace AppBundle\Service;


use Domain\Model\Inscricao;
use Domain\Repository\InscricaoRepositoryInterface;
use Domain\Service\InscricaoServiceIterface;
use Presentation\DataTransferObject\InscricaoDTO;

class InscricaoService implements InscricaoServiceIterface
{

    /**
     * @var EventDispatcherService
     */
    private $eventDispatcherService;

    /**
     * @var InscricaoRepositoryInterface
     */
    private $inscricaoRepository;

    /**
     * InscricaoService constructor.
     * @param EventDispatcherService $eventDispatcherService
     * @param InscricaoRepositoryInterface $inscricaoRepository
     */
    public function __construct(
        EventDispatcherService $eventDispatcherService,
        InscricaoRepositoryInterface $inscricaoRepository)
    {
        $this->eventDispatcherService = $eventDispatcherService;
        $this->inscricaoRepository = $inscricaoRepository;
    }


    /**
     * @param InscricaoDTO $inscricaoDTO
     * @return int
     * @throws \Exception
     */
    public function inscrever(InscricaoDTO $inscricaoDTO)
    {
        $inscricao = new Inscricao(
            $inscricaoDTO->getCandidato(),
            $inscricaoDTO->getOportunidade()
        );

        if($this->inscricaoRepository->buscarUmPorCpfOportunidade($inscricao)){
            throw new \Exception("Você já se inscreveu nesa oportunidade");
        }

        $inscricao->gerarCodigoConfirmacao();
        $this->inscricaoRepository->salvar($inscricao);
        $this->eventDispatcherService->dispatchInscricaoEvent($inscricao);

        return $inscricao->getIdInscricao();
    }
}