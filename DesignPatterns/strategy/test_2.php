<?php

interface HtmlContentStrategy{
	public function __construct($name);
	public function getContents();
}

class HelloWorldStrategy implements HtmlContentStrategy{
	var $world;
	public function __construct($world){
		$this->world = $world;
	}
	
	public function getContents(){
		return "Hello" .$this->world."!";
	}
}

$hello =  new HelloWorldStrategy('aaa');
echo $hello->getContents();
?>