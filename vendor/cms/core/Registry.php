<?php

namespace core;


class Registry
{

    use TSingletone;

    protected static  $properties = [];

    /**
     * @param $name
     * @param $value
     */
    public function setProperty($name,$value)
    {
        self::$properties[$name] = $value;
    }

    /**
     * @param $name
     * @return array
     */
    public function getProperty($name)
    {
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    /**
     * @return array
     */
    public function getProperties(){
        return self::$properties;
    }

}