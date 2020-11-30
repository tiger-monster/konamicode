<?php namespace App\Models;

	use CodeIgniter\Model;

 	class konamiModel extends Model{
 		public function listar(){
 			$Juegos = $this->db->query("SELECT * FROM t_videojuegos");
 			return $Juegos->getResult();
 		}
 		public function insertar($datos){
 			$Juegos = $this->db->table('t_videojuegos');
 			$Juegos->insert($datos);

 			return $this->db->insertID();
 		}

 		public function obtener($data){
 			$Juegos = $this->db->table('t_videojuegos');
 			$Juegos->where($data);
 			return $Juegos->get()->getResultArray();
 		}

 		public function actualizar($data, $idJuego){
 			$Juegos = $this->db->table('t_videojuegos');
 			$Juegos->set($data);
 			$Juegos->where('id_juego',$idJuego);
 			return $Juegos->update();
 		}

 		public function eliminar($data){
 			$Juegos = $this->db->table('t_videojuegos');
 			$Juegos->where($data);
 			return $Juegos->delete();
 		}
 	}