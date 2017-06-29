<?php
namespace Jlmsrl\Iderlogin\Controller\Login;

use IDERConnect\IDEROpenIDClient;

class Button extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {
        echo 'Trigger Button';


        define('CLIENTID', '636314862919108648');
        define('SECRET', 'bb68c00f-8b88-493a-9d0a-0f5f2044f716');
        define('SCOPE', 'openid a9a45fb0-28d3-4005-8801-f69e28b62745');


        $iderconnect = new IDEROpenIDClient(CLIENTID, SECRET, SCOPE);
        $iderconnect->authenticate();

        exit;
    }
}
