<?php

class Application_Model_Employee
{
    protected $_fname;
    protected $_minit;
    protected $_lname;
    protected $_ssn;
    protected $_bdate;
    protected $_address;
    protected $_sex;
    protected $_salary;
    protected $_superssn;
    protected $_dno;
            
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
            throw new Exception('Invalid employee property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid employee property');
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
 
    public function setFname($text)
    {
        $this->_fname = (string) $text;
        return $this;
    }
 
    public function getFname()
    {
        return $this->_fname;
    }
 
    public function setMinIt($text)
    {
        $this->_minit = $text;
        return $this;
    }
 
    public function getMinIt()
    {
        return $this->_minit;
    }
 
    public function setLname($text)
    {
        $this->_lname = (string) $text;
        return $this;
    }
 
    public function getLname()
    {
        return $this->_lname;
    }
    
     public function setSsn($text)
    {
        $this->_ssn = (string) $text;
        return $this;
    }
 
    public function getSsn()
    {
        return $this->_ssn;
    }
    
     public function setBdate($date)
    {
        $this->_bdate = $date;
        return $this;
    }
 
    public function getBdate()
    {
        return $this->_bdate;
    }
    
     public function setAddress($text)
    {
        $this->_address = (string) $text;
        return $this;
    }
 
    public function getAddress()
    {
        return $this->_address;
    }
    
     public function setSex($text)
    {
        $this->_sex = (string) $text;
        return $this;
    }
 
    public function getSex()
    {
        return $this->_sex;
    }
    
     public function setSalary($text)
    {
        $this->_salary = (double) $text;
        return $this;
    }
 
    public function getSalary()
    {
        return $this->_salary;
    }
    
     public function setSuperSsn($text)
    {
        $this->_superssn = (string) $text;
        return $this;
    }
 
    public function getSuperSsn()
    {
        return $this->_superssn;
    }
    
     public function setDno($text)
    {
        $this->_dno = (int) $text;
        return $this;
    }
 
    public function getDno()
    {
        return $this->_dno;
    }
 
  


}

