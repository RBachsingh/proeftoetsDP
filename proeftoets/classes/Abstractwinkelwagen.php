<?php

abstract class Abstractwinkelwagen
{
    private $store;
    private $maxProducts;

    /**
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @return integer
     */
    public function getMaxProducts()
    {
        return $this->maxProducts;
    }
}

