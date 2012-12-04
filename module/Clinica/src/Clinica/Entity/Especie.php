<?php

namespace Clinica\Entity;

use Doctrine\ORM\Mapping as ORM;

use Core\Model\AbstractEntity;

/**
 * @ORM\Table(name="especie")
 * @ORM\Entity(repositoryClass="Clinica\Repository\Especie")
 */
class Especie extends AbstractEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var int
     */
    protected $nome;

    /**
     * @ORM\OneToMany(targetEntity="Clinica\Entity\Raca", mappedBy="raca")
     * @ORM\JoinColumn(name="especie_id", referencedColumnName="id")
     */
    protected $racas;
}