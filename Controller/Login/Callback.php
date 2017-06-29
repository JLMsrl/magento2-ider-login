<?php
namespace Jlmsrl\Iderlogin\Controller\Login;


class Callback extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {
        echo 'Trigger Callback';
        exit;
    }
}
