<?php

namespace Clinica\Filter;

use Zend\InputFilter\InputFilter;

class Raca extends InputFilter
{

    public function __construct()
    {
        $this->add(
            array(
                'name' => 'nome',
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim')
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'messages' => array('isEmpty' => 'Digite um nome!')
                        )
                    )
                )
            )
        );

        $this->add(array(
                'name' => 'especie',
                'required' => true,
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'messages' => array('isEmpty' => 'Selecione uma especie!')
                        )
                    )
                )
            )
        );

    }

}