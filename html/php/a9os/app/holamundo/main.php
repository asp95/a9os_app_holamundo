<?php 
/*_gtlsc_
 * Holamundo for os.com.ar (a9os)
 * Copyright (C) 2021  Santiago Pereyra (asp95)
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.*/

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