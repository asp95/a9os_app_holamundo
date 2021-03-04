<?php 

class a9os_app_holamundo_main extends a9os_core_window{
	public function main($postData){
		return [
			"window" => $this->getWindowData($postData, [
				"width" => "300px",
				"height" => "auto",
			]),
			"prueba" => ["textoDePrueba" => "123456"]
		];
	}

}