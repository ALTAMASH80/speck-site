<?php

namespace SpeckDocs\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;
use Zend\Stdlib\Hydrator\HydratorInterface;
use Zend\Stdlib\Hydrator\ArraySerializable;
// Todo: Create Entity Model

class Docs extends AbstractDbMapper
{
	protected $tableName  = 'documents';
	
	public function getDocumentsList($documentTitle = NULL){
		$select = $this->getSelect(array('doc' => $this->tableName))
                ->join(array('mt2' => $this->tableName), 'mt2.parent_doc_id=doc.doc_id', array('parent_doc_id', 'docNxtChp' => 'doc_title'), 'left');
        $select->columns(array('CurDoc' => 'doc_title','doc_id','doc_url_title'));
        
		$resultset = $this->select($select, new \ArrayObject, new ArraySerializable)->toArray();
		
		return $resultset;
		
	}
	
	public function getDocumentByUrlTitle($urlTitle){
		$select = $this->getSelect()
					   ->join(array('mt2' => 'documents_linker'), 'mt2.document_id='.$this->tableName.'.doc_id')
                       ->where(array('doc_url_title' => $urlTitle));
		$resultset = $this->select($select, new \ArrayObject, new ArraySerializable)->toArray();
		
		return $resultset;
	}
	
	public function getDocumentByID($id){
		$select = $this->getSelect()
					   ->where(array('doc_id' => $id));
		$resultset = $this->select($select, new \ArrayObject, new ArraySerializable)->toArray();
		
		return $resultset;
	}
	public function setTableName($tableName){
        $this->tableName=$tableName;
    }
}