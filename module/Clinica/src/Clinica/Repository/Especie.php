<?php

namespace Clinica\Repository;

use Crud\Repository\AbstractRepository;

class Especie extends AbstractRepository
{

    protected $listQuery = "SELECT e FROM Clinica\Entity\Especie e ORDER BY e.nome";

}