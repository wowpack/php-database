<?php

namespace Wowpack\Database;

/**
 * Summary of Driver
 */
interface ConnectionInterface
{
    public function __construct(DatabaseDriverInterface $driver);

    public function __destruct();
}
