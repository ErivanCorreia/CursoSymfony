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
     * @var string
     */
    private $cpf;

    /**
     * @var Collection
     */
    private $habilidadesTecnicas;

    /**
     * @var Collection
     */
    private $experienciasProfissionais;

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return string
     */
    public function getCurriculo()
    {
        return $this->curriculo;
    }

    /**
     * @return Collection
     */
    public function getHabilidadesTecnicas()
    {
        return $this->habilidadesTecnicas;
    }

    /**
     * @return Collection
     */
    public function getExperienciasProfissionais()
    {
        return $this->experienciasProfissionais;
    }





}