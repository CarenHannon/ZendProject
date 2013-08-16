<?php

class Application_Model_Project
{
    protected $_pname;
    protected $_pnumber;
    protected $_plocation;
    protected $_dnum;
    
            
    public function __construct(array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
 
    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid project property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid project property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
 
    public function setPname($text)
    {
        $this->_pname = (string) $text;
        return $this;
    }
 
    public function getPname()
    {
        return $this->_pname;
    }
    
    public function setPnumber($num)
    {
        $this->_pnumber = (int) $num;
        return $this;
    }
    
    public function getPnumber()
    {
        return $this->_pnumber;
    }
    
    public function setPlocation($text)
    {
        $this->_plocation = (string) $text;
        return $this;
    }
    
    public function getPlocation()
    {
        return $this->_plocation;
    }
    
    public function setDnum($num)
    {
        $this->_dnum = (int) $num;
        return $this;
    }
    
    public function getDnum()
    {
        return $this->_dnum;
    }

}

