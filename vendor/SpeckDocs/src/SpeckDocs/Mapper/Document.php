<?php

class Document {
	protected $id;
	
	protected $docTitle;
	
	protected $docText;
	
	protected $parentDocId;
	
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
}