<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 09/06/2018
 * Time: 11:44
 */

namespace Domain\Service;


use Presentation\DataTransferObject\InscricaoDTO;

interface InscricaoServiceIterface
{
    /**
     * @param InscricaoDTO $inscricaoDTO
     * @return int
     */
    public function inscrever(InscricaoDTO $inscricaoDTO);
}