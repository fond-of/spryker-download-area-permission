<?php

declare(strict_types=1);

namespace FondOfSpryker\Shared\DownloadAreaPermission\Plugin\Permission;

use Spryker\Shared\PermissionExtension\Dependency\Plugin\PermissionPluginInterface;

class UseDownloadAreaPermissionPlugin implements PermissionPluginInterface
{
    public const KEY = 'UseDownloadAreaPermissionPlugin';

    /**
     * @return string
     */
    public function getKey(): string
    {
        return static::KEY;
    }
}
