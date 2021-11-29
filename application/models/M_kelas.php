<?php
class M_Kelas extends CI_Model{
	function data_kelas(){
		$query = $this->db->query("select * from kelas");
		return $query;
	}

    function simpan(){
        $data = array('id_kelas' => $this->input->post('id_kelas'),
                'nama_kelas' => ($this->input->post('nama_kelas')),
                'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'));
        $insert = $this->db->insert('kelas',$data);
    }  

    function data_kelas_by_id($id){
        $query = $this->db->query("select * from kelas where id_kelas = '$id'");
        return $query;
    }
    
    function update(){
        $where = array('id_kelas'=> $this->input->post('id_kelas'));
        
        
        $data1 = array(
        'nama_kelas' => $this->input->post('nama_kelas'),
        'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian')
        );
        
       $data2 = array(
        'nama_kelas' => $this->input->post('nama_kelas'),
        'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'));
            if (empty($this->input->post('nama_kelas'))) {
                $this->db->where($where);
                $query = $this->db->update('kelas',$data2);
            }else{
                $this->db->where($where);
                $query = $this->db->update('kelas',$data1);
            }
    
        if ($query > 0) {
            $this->session->set_flashdata('suksessimpan','Data Kelas Berhasil Diperbaharui');
        }
    }


}
