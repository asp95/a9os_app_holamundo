<?php 

class a9os_app_holamundo_appinstaller extends a9os_core_app_installer_base {
	const arrBaseVersion = [0, 1, 0];
	const arrVersion = [0, 1, 0];
	
	const appName = "Mi Hola Mundo";
	const iconUrl = "/resources/a9os/app/holamundo/icon.svg";

	public function install($appAppObj){
		$protection = $this->_getProtection();
		$protection->callOnlyFrom([
			"whitelist" => ["application_application"]
		]);

		$coreControllerApplication = $this->getCore()->getModel("core.controller.application");

		$coreComponent = $this->getCore()->getModel("core.component");
		$coreComponent->setComponentName("a9os_app_holamundo_main");
		$coreComponent->setDesignPath(".a9os-main .window > .main-content");
		$coreComponent->setDataModel("a9os.app.holamundo.main");
		$coreComponent->save();


		$coreController = $this->getCore()->getModel("core.controller");
		$coreController->setPath("/holamundo");
		$coreController->save();

		$coreComponentA9osMain = $this->getCore()->getModel("core.component")->load("a9os_core_main", "component_name");

		$coreControllerComponent = $this->getCore()->getModel("core.controller.component");
		$coreControllerComponent->setCoreControllerId($coreController->getID());
		$coreControllerComponent->setCoreComponentId($coreComponentA9osMain->getID());
		$coreControllerComponent->setOrder(0);
		$coreControllerComponent->save();

		$coreControllerComponent = $this->getCore()->getModel("core.controller.component");
		$coreControllerComponent->setCoreControllerId($coreController->getID());
		$coreControllerComponent->setCoreComponentId($coreComponent->getID());
		$coreControllerComponent->setOrder(1);
		$coreControllerComponent->save();


		$coreControllerApplication->addNew($coreController, $appAppObj, true);

		return true;
	}

}