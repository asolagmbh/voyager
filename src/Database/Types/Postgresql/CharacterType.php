<?php

namespace Asolagmbh\Voyager\Database\Types\Postgresql;

use Asolagmbh\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
