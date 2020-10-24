<?php
 
namespace Zino\HelloWorld\Block;
 
use Magento\Framework\View\Element\Template;
 
class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
 
    public function getTitle()
    {
        return __('HelloWorld!');
    }
}