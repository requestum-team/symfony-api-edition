<?php

namespace AuthBundle\Util;

/**
 * Trait ClientCredentialsGenerator
 */
trait ClientCredentialsGenerator
{
    /**
     * @return string
     */
    protected function generateClientId()
    {
        return sprintf('%s-%s-%s-%s-%s', $this->rnd(8), $this->rnd(4), $this->rnd(4), $this->rnd(4), $this->rnd(12));
    }

    /**
     * @return bool|string
     */
    protected function generateClientSecret()
    {
        return $this->rnd(32);
    }

    /**
     * @param $length
     * @return bool|string
     */
    private function rnd($length)
    {
        return substr(bin2hex(random_bytes(ceil($length / 2))), 0, $length);
    }
}
