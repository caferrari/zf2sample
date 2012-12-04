<?php

namespace Clinica\Entity;

use Doctrine\ORM\Mapping as ORM;

use Core\Model\AbstractEntity;

/**
 * @ORM\Table(name="raca")
 * @ORM\Entity(repositoryClass="Clinica\Repository\Raca")
 */
class Raca extends AbstractEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Clinica\Entity\Especie", inversedBy="raca")
     */
    protected $especie;

    /**
     * @ORM\Column(type="string")
     * @var int
     */
    protected $nome;
}