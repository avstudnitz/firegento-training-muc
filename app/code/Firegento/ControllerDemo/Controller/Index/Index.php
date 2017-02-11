<?php
namespace Firegento\ControllerDemo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /** @var ScopeConfigInterface */
    private $config;

    /** @var Context */
    private $context;
    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    public function __construct(
        Context $context,
        ScopeConfigInterface $config,
        PageFactory $resultPageFactory
    )
    {
        $this->config = $config;
        $this->context = $context;
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
//        echo '<pre>';
//        echo $this->config->getValue('general/locale/timezone') . PHP_EOL;
//        echo $this->config->getValue('design/head/default_title') . PHP_EOL;
//        echo '</pre>';


        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
