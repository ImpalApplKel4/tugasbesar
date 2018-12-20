<?php 
 
class PengeluaranModel extends CI_Model{ 

    function getDataPengeluaran(){   
        $query = $this->db->get('pengeluaran');
        // Jika data lebih dari 0, return array
        if( $query->num_rows() > 0 ) {
            $result = $query->result();
        } else {    
            $result = FALSE;
        }

        return $result;
    }
    function insertPengeluaran($data){
        $param = array(
            "keterangan"=>$data['keterangan'],
            "hargaPengeluaran"=>$data['hargaPengeluaran'],
            "tglPengeluaran"=>$data['tglPengeluaran'],
        );
        $insert = $this->db->insert('pengeluaran', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function updatePengeluaran($data){
        $param = array(
            "keterangan"=>$data['keterangan'],
            "hargaPengeluaran"=>$data['hargaPengeluaran'],
            "idPengeluaran"=>$data['idPengeluaran'],
            "tglPengeluaran"=>$data['tglPengeluaran'],
        );
        $this->db->where('idPengeluaran', $data['idPengeluaran']);
        $update = $this->db->update('pengeluaran',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function deletePengeluaran($id){
        $table = 'Pengeluaran';
        $this->db->where('idPengeluaran', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}