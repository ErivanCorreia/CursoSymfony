<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 02/06/2018
 * Time: 11:34
 */

namespace Domain\Model;




use Doctrine\Common\Collections\Collection;

class Candidato
{
    /**
     * @var integer
     */
    private $idCandidato;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $telefone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $curriculo;

    /**
     * @var Collection
     */
    private $habilidadesTecnicas;

    /**
     * @var Collection
     */
    private $experienciasProficionais;
}