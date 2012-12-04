<?php

namespace Clinica\Form;

use Crud\Form\AbstractForm;

class Raca extends AbstractForm
{

    public function __construct(array $especies)
    {

        parent::__construct('raca');
        $this->setInputFilter($this->getInputFilter());
        $this->setAttribute('method', 'post');

        $especies = array('' => 'Selecione') + $especies;

        $this->add(array(
            'name' => 'id',
            'type' => 'hidden'
        ));

        $this->add(array(
                'name' => 'especie',
                'type' => 'Zend\Form\Element\Select',
                'options' => array(
                    'label' => 'Espécie',
                    'value_options' => $especies
                )
            )
        );

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