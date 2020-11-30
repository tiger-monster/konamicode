<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TVideojuegos extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_juego'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'Videojuego'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'Tipo'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'Fecha_lanzamiento'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],

                        'Descripcion'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                ]);
                $this->forge->addKey('id_juego', true);
                $this->forge->createTable('t_videojuegos');
        }

        public function down()
        {
                $this->forge->dropTable('t_videojuegos');
        }
}
