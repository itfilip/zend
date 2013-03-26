<?php

class Application_Model_DbTable_Albums extends Zend_Db_Table_Abstract
{

    protected $_name = 'albums';
    
    public function getAlbumPage($page)
    {
	    $db = Zend_Db_Table::getDefaultAdapter();
	    $adapter = new Zend_Paginator_Adapter_DbSelect($db->select()->from('albums'));
	    $paginator = new Zend_Paginator($adapter);
	    $paginator->setCurrentPageNumber($page);
	    $paginator->setPageRange(5);
	    return $paginator;
    }
    
    public function getAlbum($id)
    {
    	$id = (int)$id;
    	$row = $this->fetchRow('id = ' . $id);
    	if (!$row) {
    		throw new Exception("Could not find row $id");
    	}
    	return $row->toArray();
    }
    
    public function addAlbum($artist, $title)
    {
    	$data = array(
    			'artist' => $artist,
    			'title' => $title,
    	);
    	$this->insert($data);
    }
    
    public function updateAlbum($id, $artist, $title)
    {
    	$data = array(
    			'artist' => $artist,
    			'title' => $title,
    	);
    	$this->update($data, 'id = '. (int)$id);
    }
    
    public function deleteAlbum($id)
    {
    	$this->delete('id =' . (int)$id);
    }


}

