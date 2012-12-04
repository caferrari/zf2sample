<?php

namespace Core\Form;

use Zend\Form\Form;

abstract class AbstractForm extends Form
{

    use \Core\Traits\getInputFilter;

}