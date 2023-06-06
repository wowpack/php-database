<?php

namespace Wowpack\Database;

interface ConfigurationInterface
{
    /**
     * Summary of Configuration
     */
    public function configure(DatabaseDriverInterface $driver): void;
}
