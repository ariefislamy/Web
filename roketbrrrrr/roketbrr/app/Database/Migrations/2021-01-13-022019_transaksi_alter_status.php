<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiAlterStatus extends Migration
{
	public function up()
	{
		$fields = [
			'status'=>[
				'type'=>'ENUM',
				'constraint'=>'Menunggu','Berhasil',
				'value'=>'Menunggu',
			],
		];

		$this->forge->addColumn('transaksi', $fields);
		
	}
	public function down()
	{
		$this->forge->dropColumn('transaksi', ['status']);
	}
}
