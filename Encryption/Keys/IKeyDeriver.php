<?php
/**
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2016 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */
namespace Opulence\Cryptography\Encryption\Keys;

/**
 * Defines the interface for key derivers to implement
 */
interface IKeyDeriver
{
    /** The number of bytes the salt should be */
    const SALT_NUM_BYTES = 32;

    /**
     * Derives suitable encryption keys from a password
     *
     * @param string $password The user-supplied encryption password
     * @param string $salt The salt to use on the keys
     * @return DerivedKeys The derived keys
     */
    public function deriveKeys(string $password, string $salt) : DerivedKeys;
}