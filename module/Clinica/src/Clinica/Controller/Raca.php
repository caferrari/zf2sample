<?php

namespace Clinica\Controller;

use Crud\Controller\AbstractController;

class Raca extends AbstractController
{

    protected $editView = 'clinica/raca/novo';

    public function getForm()
    {
        $especies = $this->getRepository('Clinica\Entity\Especie')->fetchPairs();
        return new $this->form($especies);
    }

}