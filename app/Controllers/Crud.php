<?php namespace App\Controllers;

	use App\Models\konamiModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new konamiModel();
		$datos = $Crud->listar();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('konami', $data);
	}

	public function crear(){
		$datos = [
					"Videojuego" => $_POST['Videojuego'],
					"Tipo" => $_POST['Tipo'],
					"Fecha_lanzamiento" => $_POST['Fecha_lanzamiento'],
					"Descripcion" => $_POST['Descripcion']
				 ];
		$Crud = new konamiModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}

	}
 
	public function actualizar(){
		$datos = [
					"Videojuego" => $_POST['Videojuego'],
					"Tipo" => $_POST['Tipo'],
					"Fecha_lanzamiento" => $_POST['Fecha_lanzamiento'],
					"Descripcion" => $_POST['Descripcion']
				 ];
		$idJuego =  $_POST['idJuego'];

		$Crud = new konamiModel();

		$respuesta = $Crud->actualizar($datos, $idJuego);

		if ($respuesta){
			return redirect()->to(base_url().'/')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	}

	public function obtener($idJuego){
		$data = ["id_juego" => $idJuego];
		$Crud = new konamiModel();
		$respuesta = $Crud->obtener($data);

		$datos = ["datos"=>$respuesta];

		return view('actualizar', $datos);
	}

	public function eliminar($idJuego){
		$Crud = new konamiModel();
		$data = ["id_juego" => $idJuego];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}
	}
	//--------------------------------------------------------------------

}
