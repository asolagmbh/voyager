<?php

namespace Asolagmbh\Voyager\Database\Types\Postgresql;

use Asolagmbh\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
