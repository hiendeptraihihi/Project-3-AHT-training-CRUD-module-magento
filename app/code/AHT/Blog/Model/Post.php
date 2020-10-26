<?php

namespace AHT\Blog\Model;

use AHT\Blog\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends AbstractModel implements IdentityInterface, PostInterface
{
    const CACHE_TAG = 'aht_blog_post';

    protected $_cacheTag = 'aht_blog_post';

    protected $_eventPrefix = 'aht_blog_post';

    protected function _construct()
    {
        $this->_init('AHT\Blog\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}