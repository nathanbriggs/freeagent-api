<?php

namespace CloudManaged\FreeAgent\Entities;

interface EntityInterface
{
    public function toArray();

    public function toString();

    public function __toString();
}
