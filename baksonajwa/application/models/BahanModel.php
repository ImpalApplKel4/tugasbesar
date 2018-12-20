<?php 
 
class BahanModel extends CI_Model{ 

    function getDataBahan(){   
        $query = $this->db->get('bahan');
        // Jika data lebih dari 0, return array
        if( $query->num_rows() > 0 ) {
            $result = $query->result();
        } else {    
            $result = FALSE;
        }

        return $result;
    }
    function insertBahan($data){
        $param = array(
            "NamaBahan"=>$data['NamaBahan'],
            "stockBahan"=>$data['stockBahan'],
            "tglBahan"=>$data['tglBahan'],
        );
        $insert = $this->db->insert('bahan', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function updateBahan($data){
        $param = array(
            "NamaBahan"=>$data['NamaBahan'],
            "idBahan"=>$data['idBahan'],
            "stockBahan"=>$data['stockBahan'],
            "tglBahan"=>$data['tglBahan'],
        );
        $this->db->where('idBahan', $data['idBahan']);
        $update = $this->db->update('bahan',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function deleteBahan($id){
        $table = 'bahan';
        $this->db->where('idBahan', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}