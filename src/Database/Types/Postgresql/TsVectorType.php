<?php

namespace Asolagmbh\Voyager\Database\Types\Postgresql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Asolagmbh\Voyager\Database\Types\Type;

class TsVectorType extends Type
{
    const NAME = 'tsvector';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'tsvector';
    }
}
