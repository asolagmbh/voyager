<?php

namespace Asolagmbh\Voyager\Database\Types\Postgresql;

use Asolagmbh\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
