<?php
namespace AHT\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'aht_blog_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Tao Resource Model
     * 
     * @return void
     */

     protected function _construct()
     {
         $this->_init('AHT\Blog\Model\Post', 'AHT\Blog\Model\ResourceModel\Post');
     }
}