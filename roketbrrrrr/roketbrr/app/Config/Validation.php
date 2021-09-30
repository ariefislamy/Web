<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword'=> [
			'rules' => 'required|matches[password]',
		],	
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword' => [
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $transaksi = [
		'id_layanan' => [
			'rules' => 'required',
		],
		'id_pembeli' => [
			'rules' => 'required',
		],
		'berat'=> [
			'rules' => 'required',
		],
		'alamat'=> [
			'rules' => 'required',
		],
		'total_harga'=> [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];

	public $layanan = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'deskripsi' => [
			'rules' => 'required',
		],
		'estimasi' => [
			'rules' => 'required',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
	];

	public $layanan_errors = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'deskripsi' => [
			'required' => '{field} Harus diisi',
		],
		'estimasi' => [
			'required' => '{field} Harus diisi',
		],
		'gambar' => [
			'uploaded' => '{field} Harus diupload',
		],	
	];

	public $layananupdate = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'deskripsi' => [
			'rules' => 'required',
		],
		'estimasi' => [
			'rules' => 'required',
		],
	];

	public $layananupdate_errors = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'deskripsi' => [
			'required' => '{field} Harus diisi',
		],
		'estimasi' => [
			'required' => '{field} Harus diisi',
		],
	];

}
