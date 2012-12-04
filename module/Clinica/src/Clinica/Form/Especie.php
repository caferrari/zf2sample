<?php

namespace Clinica\Form;

use Crud\Form\AbstractForm;

class Especie extends AbstractForm
{

    public function __construct()
    {

        parent::__construct('especie');
        $this->setInputFilter($this->getInputFilter());
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'id',
            'type' => 'hidden'
        ));

        $this->add(array(
                'name' => 'nome',
                'type' => 'text',
                'options' => array(
                    'label' => 'Nome'
                ),
                'attributes' => array(
                    'placeholder' => 'Nome da espécie'
                )
            )
        );
    }

}