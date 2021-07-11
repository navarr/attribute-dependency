<?php
/**
 * @copyright 2021 Navarr Barnier. All Rights Reserved.
 */

declare(strict_types=1);

namespace Navarr\Attribute;

use Attribute;

/**
 * Declares a dependency on another package
 */
#[Attribute(Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
class Dependency
{
    /**
     * @param string $package The fully qualified name of the required composer package
     * @param string|null $versionConstraint Optional, A composer-compatible version constraint
     * @param string|null $reason Option, The reason for this restraint
     * @param bool $required Whether or not it's required for the code to run. Default: true
     */
    public function __construct(
        private string $package,
        private ?string $versionConstraint = null,
        private ?string $reason = null,
        private bool $required = true,
    ) {
    }

    public function getPackage(): string
    {
        return $this->package;
    }

    public function getVersionConstraint(): ?string
    {
        return $this->versionConstraint;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function hasVersionConstraint(): bool
    {
        return $this->versionConstraint !== null;
    }

    public function hasReason(): bool
    {
        return $this->reason !== null;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }
}
