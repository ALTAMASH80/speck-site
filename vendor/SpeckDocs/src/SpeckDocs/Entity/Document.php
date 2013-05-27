<?php
namespace SpeckDocs\Entity;

class Document {
	protected $id;
	
	protected $docTitle;
	
	protected $docText;
	
	protected $parentDocId;
	
	protected $docUrlTitle;
	
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = (int) $id;
		return $this;
	}
	
	public function getDocTitle(){
		return $this->docTitle;
	}
	
	public function setDocTitle($docTitle){
		$this->docTitle = $docTitle;
		return $this;
	}
	
	public function getDocText(){
		return $this->docText;
	}
	
	public function setDocText($docText){
		$this->docText = $docText;
		return $this;
	}
	
	public function getParentDocId(){
		return $this->parentDocId;
	}
	
	public function setParentDocId($parentDocId){
		$this->parentDocId = $parentDocId;
		return $this;
	}
	
	public function getDocUrlTitle(){
		return $this->docUrlTitle;
	}
	
	public function setDocUrlTitle($docUrlTitle){
		$this->docUrlTitle = $docUrlTitle;
		return $this;
	}
}