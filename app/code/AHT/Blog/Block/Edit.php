<?php
namespace AHT\Blog\Block;

use AHT\Blog\Model\PostFactory;
use Magento\Framework\Registry;
use AHT\Blog\Model\PostRepository;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Edit extends Template
{
    private $postFactory;
    private $postRepository;
    private $_coreRegistry;

    public function __construct(Context $context, PostFactory $postFactory, PostRepository $postRepository, Registry $coreRegistry)
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
        $this->_coreRegistry = $coreRegistry;
    }

    public function getBlogInfo()
    {
        return __('AHT Blog module');
    }

    public function getPost()
    {
        $post_id = $this->_coreRegistry->registry('post_id');
        $post = $this->postRepository->getById($post_id);
        return $post;
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}