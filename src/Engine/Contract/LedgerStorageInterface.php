<?php
declare(strict_types=1);
namespace Airship\Engine\Contract;

/**
 * Interface LedgerStorageInterface
 *
 * Describes the interface Ledger uses to store log messages.
 *
 * @package Airship\Engine\Contract
 */
interface LedgerStorageInterface
{
    /**
     * Store information inside of a ledger
     * 
     * @param string $level
     * @param string $message
     * @param string $context (JSON encoded)
     * @return mixed
     */
    public function store(string $level, string $message, string $context);
}
