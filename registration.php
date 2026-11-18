<?php
/**
 * Blackbird QuickOrder Hyvä Compatibility
 *
 * @copyright Copyright (c) 2026 Blackbird Agency (https://black.bird.eu)
 * @license   MIT, see LICENSE.txt
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Blackbird_QuickOrderHyvaCompatibility', __DIR__);
