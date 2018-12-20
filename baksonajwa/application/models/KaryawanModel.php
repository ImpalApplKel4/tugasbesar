<?php 
 
class KaryawanModel extends CI_Model{ 

    function getDataKaryawan(){   
        $query = $this->db->get('karyawan');
        // Jika data lebih dari 0, return array
        if( $query->num_rows() > 0 ) {
            $result = $query->result();
        } else {    
            $result = FALSE;
        }

        return $result;
    }

    function insertKaryawan($data){
        $param = array(
            "NamaKar"=>$data['NamaKar'],
            "noHP"=>$data['noHP'],
            "Gaji"=>$data['Gaji'],
            "Divisi"=>$data['Divisi'],
        );
        $insert = $this->db->insert('karyawan', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function updateKaryawan($data){
        $param = array(
            "NamaKar"=>$data['NamaKar'],
            "NIK"=>$data['NIK'],
            "noHP"=>$data['noHP'],
            "Gaji"=>$data['Gaji'],
            "Divisi"=>$data['Divisi'],
        );
        $this->db->where('NIK', $data['NIK']);
        $update = $this->db->update('karyawan',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function deleteKaryawan($id){
        $table = 'karyawan';
        $this->db->where('NIK', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}