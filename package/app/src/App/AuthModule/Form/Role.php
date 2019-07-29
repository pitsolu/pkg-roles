<?php

namespace __APP__\AuthModule\Form;

class Role extends \Strukt\Contract\Form{
	
	protected function validation(){

		$service = $this->getValidatorService();

		$this->setMessage("name", $service->getNew($this->get("name"))->isNotEmpty());
	}
}