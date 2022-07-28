<?php
namespace Keyi1688;

trait Arrayable{
    public function toArray(){
        $reflection = new \ReflectionClass(__CLASS__);
        $vars = $reflection->getProperties(\ReflectionProperty::IS_PRIVATE);
        $info = [];
        foreach ($vars as $var)
        {
            $name = $var->name;

            if($name == 'stdResult' || $name == 'arrayResult')
            {
                continue;
            }

            if(is_array($this->$name))
            {
                foreach ($this->$name as $one)
                {
                    $item = '';
                    if(is_object($one) && method_exists($one, 'toArray'))
                    {
                        $item = $one->toArray();
                    }
                    else{
                        $item = $one;
                    }

                    $info[$name][] = $item;
                }

            }
            else if(is_object($this->$name) && method_exists($this->$name, 'toArray'))
            {
                $info[$name] = $this->$name->toArray();
            }
            else if(is_object($this->$name) && is_a($this->$name, \stdClass::class))
            {
                $info[$name] = (array) $this->$name;
            }
            else if(is_object($this->$name) && is_a($this->$name, \ArrayObject::class))
            {
                $info[$name] = (array) $this->$name;
            }
            else{
                $info[$name] = $this->$name;
            }

        }

        return $info;
    }
}
