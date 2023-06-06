<?php

namespace Wowpack\Database;

/**
 * Summary of Driver
 */
class Connection implements ConnectionInterface
{
    public function __construct(DatabaseDriverInterface $driver)
    {
    }

    public function __destruct()
    {
    }
}
