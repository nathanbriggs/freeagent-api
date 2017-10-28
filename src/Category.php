<?php

namespace CloudManaged\FreeAgent;

use CloudManaged\FreeAgent\Api\ApiResource;

class Category extends ApiResource
{
    public function getCategoryUrl()
    {
        return $this->getUrlBase() . 'category';
    }
}
