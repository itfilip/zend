<?php

class Application_Model_DbTable_Users extends Zend_Db_Table_Abstract
{

    protected $_name = 'users';
    
    public function getUser($id)
    {
    	$id = (int)$id;
    	$row = $this->fetchRow('id = ' . $id);
    	if (!$row) {
    		throw new Exception("Could not find row $id");
    	}
    	return $row->toArray();
    }
    
    public function addUser($username, $name, $email, $role)
    {
    	$data = array(
    			'username' => $username,
    			'name' => $name,
    			'email' => $email,
    			'role' => $role,
    	);
    	$this->insert($data);
    }
    
    public function updateUser($id, $name, $email)
    {
    	$data = array(
    			'name' => $name,
    			'email' => $email,
    	);
    	$this->update($data, 'id = '. (int)$id);
    }
    
    public function updateUserRole($id, $role)
    {
    	$data = array(
    			'role' => $role,
    	);
    	$this->update($data, 'id = '. (int)$id);
    }
    
    public function updateUserPassword($id, $password)
    {
    	$data = array(
    			'password' => $password,
    	);
    	$this->update($data, 'id = '. (int)$id);
    }
    
    public function deleteUser($id)
    {
    	$this->delete('id =' . (int)$id);
    }

}

