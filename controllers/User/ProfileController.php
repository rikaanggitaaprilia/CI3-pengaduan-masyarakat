<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load Dependencies
        is_logged_in();
    }

    // List all your items
    public function index()
    {
        $data['title'] = 'Profile';

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        if ($masyarakat) {
            $data['user'] = $masyarakat;
        } elseif ($petugas) {
            $data['user'] = $petugas;
        }

        $this->load->view('_part/backend_head', $data);
        $this->load->view('_part/backend_sidebar_v');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('user/profile');
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }

    public function edit()
    {
        $data['title'] = 'Profile';

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        $data['petugas'] = $this->db->get('petugas')->result_array();
        if ($masyarakat) {
            $data['user'] = $masyarakat;
        } elseif ($petugas) {
            $data['user'] = $petugas;
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('_part/backend_head', $data);
            $this->load->view('_part/backend_sidebar_v');
            $this->load->view('_part/backend_topbar_v');
            $this->load->view('user/edit_foto', $data);
            $this->load->view('_part/backend_footer_v');
            $this->load->view('_part/backend_foot');
        } else {
            $username = $this->input->post('username');
            $upload_image = $_FILES['foto_profile']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '6000';
                $config['upload_path']   = './assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_profile')) {
                    $old_image = $data['user']['foto_profile'];
                    if ($old_image != 'user.png') {
                        unlink(FCPATH . 'assets/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto_profile', $new_image);
                } else {
                    echo $this->upload->display_errors();
                    return;
                }
            }

            $this->db->where('username', $username);
            $this->db->update('petugas'); // Hanya memperbarui tabel 'petugas'

            redirect('User/ProfileController');
        }
    }

    public function update_foto()
    {
        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        
        if ($masyarakat) {
            $data = $masyarakat;
            $table = 'masyarakat';
        } elseif ($petugas) {
            $data = $petugas;
            $table = 'petugas';
        } else {
            // Redirect jika tidak ditemukan data user
            redirect('User/ProfileController');
            return;
        }
    
        $username = $this->input->post('username');
        $upload_image = $_FILES['foto_profile']['name'];
    
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '6000';
            $config['upload_path']   = './assets/profile/';
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('foto_profile')) {
                $old_image = $data['foto_profile'];
                if ($old_image != 'user.png') {
                    unlink(FCPATH . 'assets/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_profile', $new_image);
            } else {
                echo $this->upload->display_errors();
                return;
            }
        }
    
        $this->db->set('username', $username); // Pastikan set data yang akan diupdate
        $this->db->where('username', $username);
        $this->db->update($table); // Memperbarui tabel yang sesuai ('masyarakat' atau 'petugas')
    
        redirect('User/ProfileController');
    }
    
}

/* End of file ProfileController.php */
/* Location: ./application/controllers/User/ProfileController.php */
