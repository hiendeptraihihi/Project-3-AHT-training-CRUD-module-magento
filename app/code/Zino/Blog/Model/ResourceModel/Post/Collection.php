<?php
namespace Zino\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'zino_blog_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Tao Resource Model
     * 
     * @return void
     */

     protected function _construct()
     {
         $this->_init('Zino\Blog\Model\Post', 'Zino\Blog\Model\ResourceModel\Post');
     }
}