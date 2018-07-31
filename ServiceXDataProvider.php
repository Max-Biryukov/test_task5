<?php

namespace test\Decorator;

class ServiceXDataProvider implements DataProvider
{

    private $_param;

    public function __construct( $param )
    {
        $this->_param = $param;
    }

    /**
     * @param array $request
     * @return array
     */
    public function getResponse( array $request )
    {
        //Получение данных
        //Также можно в процессе вызывать методы классов кеширования и логирования
        return $this->_param->process();
    }

}
