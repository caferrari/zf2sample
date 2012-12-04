<?php

namespace Clinica\Repository;

use Core\Repository\AbstractRepository;

class Raca extends AbstractRepository
{

    protected $listQuery = "SELECT e FROM Clinica\Entity\Raca e ORDER BY e.nome";

    public function insert(array $data)
    {
        $entity = $this->createEntity($data);

        $especie = $this->getReference($data['especie'], 'Clinica\Entity\Especie');
        $entity->especie = $especie;

        $em = $this->getEntityManager();
        $em->persist($entity);
        $em->flush();

        return $entity;
    }

    public function update(array $data)
    {
        $entity = $this->getReference($data['id']);
        $entity->setData($data);

        $especie = $this->getReference($data['especie'], 'Clinica\Entity\Especie');
        $entity->especie = $especie;

        $em = $this->getEntityManager();
        $em->persist($entity);
        $em->flush();

        return $entity;
    }

}