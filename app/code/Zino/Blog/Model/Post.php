<?php

namespace Zino\Blog\Model;

use Zino\Blog\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends AbstractModel implements IdentityInterface, PostInterface
{
    const CACHE_TAG = 'zino_blog_post';

    protected $_cacheTag = 'zino_blog_post';

    protected $_eventPrefix = 'zino_blog_post';

    protected function _construct()
    {
        $this->_init('Zino\Blog\Model\ResourceModel\Post');
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