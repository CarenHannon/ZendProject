<?php

class Application_Model_Department
{
    protected $_dname;
    protected $_dnumber;
    protected $_mgrssn;
    protected $_mgrstartdate;
            
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
            throw new Exception('Invalid company property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid company property');
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
 
    public function setDname($text)
    {
        $this->_dname = (string) $text;
        return $this;
    }
 
    public function getDname()
    {
        return $this->_dname;
    }
 
    public function setDnumber($num)
    {
        $this->_dnumber = (int) $num;
        return $this;
    }
 
    public function getDnumber()
    {
        return $this->_dnumber;
    }
 
    public function setMgrSsn($ssn)
    {
        $this->_mgrssn = (string) $ssn;
        return $this;
    }
 
    public function getMgrSsn()
    {
        return $this->_mgrssn;
    }
 
    public function setMgrStartDate($date)
    {
        $this->_mgrstartdate = $date;
        return $this;
    }
 
    public function getMgrStartDate()
    {
        return $this->_mgrstartdate;
    }

}

