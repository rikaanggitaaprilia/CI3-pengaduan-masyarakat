<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Masyarakat_m');
	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Register';

		$this->form_validation->set_rules('nik', 'Nik', 'trim|required|numeric|is_unique[masyarakat.nik]', [
			'required' => 'Kolom %s harus diisi.',
			'numeric' => 'Kolom %s harus berisi angka.',
			'is_unique' => 'Nik sudah terdaftar.'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|alpha_numeric_spaces', [
			'required' => 'Kolom %s harus diisi.',
			'alpha_numeric_spaces' => 'Kolom %s hanya boleh berisi huruf, angka, dan spasi.'
		]);
		
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|alpha_numeric_spaces', [
			'required' => 'Kolom %s harus diisi.',
			'alpha_numeric_spaces' => 'Kolom %s hanya boleh berisi huruf, angka, dan spasi.'
		]);
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric_spaces|callback_username_check', [
			'required' => 'Kolom %s harus diisi.',
			'alpha_numeric_spaces' => 'Kolom %s hanya boleh berisi huruf dan angka.',
			'username_check' => 'Username sudah dipakai.'
		]);
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_numeric_spaces|min_length[6]|max_length[15]', [
			'required' => 'Kolom %s harus diisi.',
			'alpha_numeric_spaces' => 'Kolom %s hanya boleh berisi huruf dan angka.',
			'min_length' => 'Panjang %s minimal 6 karakter.',
			'max_length' => 'Panjang %s maksimal 15 karakter.'
		]);
		
		$this->form_validation->set_rules('telp', 'Telp', 'trim|required|numeric', [
			'required' => 'Kolom %s harus diisi.',
			'numeric' => 'Kolom %s harus berisi angka.'
		]);

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('_part/login_head', $data);
			$this->load->view('register_v');
			$this->load->view('_part/login_footer');
		else :
			$params = [
				'nik'			=> htmlspecialchars($this->input->post('nik', TRUE)),
				'nama'			=> htmlspecialchars($this->input->post('nama', TRUE)),
				'alamat'		=> htmlspecialchars($this->input->post('alamat', TRUE)),
				'username'		=> htmlspecialchars($this->input->post('username', TRUE)),
				'password'		=> password_hash(htmlspecialchars($this->input->post('password', TRUE)), PASSWORD_DEFAULT),
				'telp'			=> htmlspecialchars($this->input->post('telp', TRUE)),
				'foto_profile'	=> 'user.png',
			];

			$resp = $this->Masyarakat_m->create($params);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
					Register berhasil, Silahkan Login!
					</div>');

				redirect('Auth/LoginController');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
					Register gagal!
					</div>');

				redirect('Auth/RegisterController');
			endif;

		endif;
	}

	public function username_check($str = NULL)
	{
		if (!empty($str)) :
			$masyarakat = $this->db->get_where('masyarakat', ['username' => $str])->row_array();

			$petugas = $this->db->get_where('petugas', ['username' => $str])->row_array();

			if ($masyarakat == TRUE or $petugas == TRUE) :

				$this->form_validation->set_message('username_check', 'Username ini sudah dipakai.');

				return FALSE;
			else :
				return TRUE;
			endif;
		else :
			$this->form_validation->set_message('username_check', 'Inputan Kosong');

			return FALSE;
		endif;
	}
}

/* End of file RegisterController.php */
/* Location: ./application/controllers/Auth/RegisterController.php */
