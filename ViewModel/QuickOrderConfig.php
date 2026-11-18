<?php
/**
 * Blackbird QuickOrder Hyvä Compatibility
 *
 * @copyright Copyright (c) 2026 Blackbird Agency (https://black.bird.eu)
 * @license   MIT, see LICENSE.txt
 */

declare(strict_types=1);

namespace Blackbird\QuickOrderHyvaCompatibility\ViewModel;

use Blackbird\QuickOrder\Api\ConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Quick Order settings needed by the Hyvä templates
 */
class QuickOrderConfig implements ArgumentInterface
{
    /**
     * @param ConfigInterface $config
     */
    public function __construct(
        private readonly ConfigInterface $config
    ) {
    }

    /**
     * Whether visitors who are not logged in may use the Quick Order page
     *
     * @return bool
     */
    public function isGuestAllowed(): bool
    {
        return $this->config->allowGuestAccess();
    }
}
