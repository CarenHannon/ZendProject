<?php

class Application_Model_CompanyMapper
{

protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable( $ins)
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_'.$ins.'');
        }
        return $this->_dbTable;
    }
  
    public function fetchDepartment()
    {
        $resultSet = $this->getDbTable("Department")->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Department();
            $entry->setDname($row->dname)
                  ->setDnumber($row->dnumber)
                  ->setMgrSsn($row->mgrssn)
                  ->setMgrStartDate($row->mgrstartdate);
            $entries[] = $entry;
        }
        return $entries;
    }
    
    public function fetchEmployee()
    {
        $resultSet = $this->getDbTable("Employee")->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Employee();
            $entry->setFname($row->fname)
                  ->setMinIt($row->minit)
                  ->setLname($row->lname)
                  ->setSsn($row->ssn)
                  ->setBdate($row->bdate)
                  ->setAddress($row->address)
                  ->setSex($row->sex)
                  ->setSalary($row->salary)
                  ->setSuperSsn($row->superssn)
                  ->setDno($row->dno);
            $entries[] = $entry;
        }
        return $entries;
    }
    
    public function fetchProject()
    {
        $resultSet = $this->getDbTable("Project")->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Project();
            $entry->setPname($row->pname)            
                  ->setPnumber($row->pnumber)                    
                  ->setPlocation($row->plocation)
                  ->setDnum($row->dnum);
            $entries[] = $entry;
        }
        return $entries;
    }
}

