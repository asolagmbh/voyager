<?php

namespace Asolagmbh\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Asolagmbh\Voyager\Database\Types\Type;

class InetType extends Type
{
    const NAME = 'inet';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'inet';
    }
}
