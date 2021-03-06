<?php

namespace Digilist\SnakeDumper\Converter;

use Faker;

/**
 * The JohnDoeConverter replaces a value
 * with a random first and last name.
 */
class JohnDoeConverter extends FakerConverter
{

    public function __construct(array $arguments = array())
    {
        $arguments['formatter'] = 'name';

        parent::__construct($arguments);
    }
}
