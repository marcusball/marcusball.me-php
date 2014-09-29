<?php
class IndexPage extends PageObject{
	public function preExecute(){
		$this->setResult(302,'/res/docs/Marcus-Ball-resume.pdf');
		return false;
	}
}
?>