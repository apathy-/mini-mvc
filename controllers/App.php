<?php

class App {
	
	public $mainTemplate;
	public $pageTemplate;


	function __construct($tpl = 'Main.html') {
		$this->setMainTemplate($tpl);

		$this->setPageTemplate(get_class($this) . '.html');
	}

	function setMainTemplate($tpl) {
		$this->mainTemplate = $tpl;
	}

	function setPageTemplate($tpl) {
		$this->pageTemplate = $tpl;
	}

	function displayPage() {

		//collect main template as code
		$template = file_get_contents('templates/'.$this->mainTemplate);

		//insert page template content
		$content = '';
		if(!empty($this->pageTemplate)) {
			$content = file_get_contents('templates/'.$this->pageTemplate);	
		}
		

		$template = str_replace('{CONTENT}', $content, $template);

		//display!
		echo $template;
	}
}