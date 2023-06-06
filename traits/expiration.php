<?php


trait Expiration
{
    private $expiration;

    public function getExpireDate()
    {
        return $this->expiration;
    }

    public function isNotExpire()
    {
        return date('Y-m-d') < date('Y-m-d', strtotime($this->expiration));
    }
}
