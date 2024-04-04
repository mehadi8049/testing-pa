<?php

namespace Mehadi\TestingPa;

class Test
{
    /**
     * Generate a Unique Slug.
     *
     * @param object $model
     * @param string $value
     * @param string $field
     * @param string $separator
     *
     * @return string
     * @throws \Exception
     */
    public function get(): string
    {
        return '200';

        throw new \Exception('Can not create a unique slug');
    }
}