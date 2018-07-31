<?php

namespace test\Decorator;

interface DataProvider
{
    /**
     * @param array $request
     *
     * @return array
     */
    public function getResponse( array $request );

}
