<?php
namespace Zino\Blog\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	private $postFactory;
	private $postRepository;
	public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Zino\Blog\Model\PostRepository $postRepository, \Zino\Blog\Model\PostFactory $postFactory)
	{
		parent::__construct($context);
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
	}

	public function getBlogInfo()
	{
		return __('Zino Blog module');
	}
	public function getPosts()
	{
		$collection = $this->postRepository->getList();
		// $collection = $post->getCollection();
		return $collection;
	}

}