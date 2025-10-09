<?php
/**
 * Copyright © OpenGento, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);

namespace Opengento\Application;

use Magento\Framework\App\ObjectManagerFactory;
use Opengento\Application\AppObjectManager;

class AppObjectManagerFactory extends ObjectManagerFactory
{
    protected $_locatorClassName = AppObjectManager::class;
}
