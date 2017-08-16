<?php

namespace Asolagmbh\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Asolagmbh\Voyager\Database\Types\Type;

class TsQueryType extends Type
{
    const NAME = 'tsquery';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'tsquery';
    }
}
