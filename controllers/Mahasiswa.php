<?php 
class Mahasiswa extends CI_Controller {
    function index() {
        $data['mahasiswa'] = $this->ModelMahasiswa->tampilData()->result();
        $this->load->view('data-mahasiswa', $data);
    }
    function tambah() {
        $this->load->view('input-mahasiswa');
    }
    function tambah_aksi() {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'alamat' => $alamat,
            'telepon' => $telepon,      
        );
        $this->ModelMahasiswa->simpanMahasiswa($data);
        redirect('mahasiswa/index');
    }
    function updateMahasiswa ($where = null, $data=null) {
        return $this->db->update('mhs', $data, $where);
    }
    
    function edit($id) {
        $where = array('nim'=>$id);
        $data['mhs'] = $this->ModelMahasiswa->editData($where, 'mhs')->result();
        $this->load->view('edit-mahasiswa', $data);
    }
    function update() {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'alamat' => $alamat,
            'telepon' => $telepon,
        );
        $where= array (
            'nim' => $nim
        );
        $this->ModelMahasiswa->updateMahasiswa($where, $data, 'mhs');
        redirect('mahasiswa/index');
    }
    function hapus ($id) {
        $where = array ('nim' => $id);
        $this->ModelMahasiswa->hapusMahasiswa($where, 'mhs');
        redirect('mahasiswa/index');

    }
}