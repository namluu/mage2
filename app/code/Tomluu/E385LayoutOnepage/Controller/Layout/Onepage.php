<?php
namespace Tomluu\E385LayoutOnepage\Controller\Layout;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page as ResultPage;

class Onepage extends Action
{

    protected $resultPage;

    public function __construct(Context $context, ResultPage $resultPage)
    {
        $this->resultPage = $resultPage;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->resultPage->initLayout();
        return $this->resultPage;
    }
}