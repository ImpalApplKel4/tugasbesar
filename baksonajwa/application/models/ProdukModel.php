<?php 
 
class ProdukModel extends CI_Model{ 

    function getDataProduk(){   
        $query = $this->db->get('produk');
        // Jika data lebih dari 0, return array
        if( $query->num_rows() > 0 ) {
            $result = $query->result();
        } else {    
            $result = FALSE;
        }

        return $result;
    }
    function insertProduk($data){
        $param = array(
            "NamaProduk"=>$data['NamaProduk'],
            "HargaProduk"=>$data['HargaProduk'],
            "TipeProduk"=>$data['TipeProduk'],
        );
        $insert = $this->db->insert('produk', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function updateProduk($data){
        $param = array(
            "idProduk"=>$data['idProduk'],
			"NamaProduk"=>$data['NamaProduk'],
            "HargaProduk"=>$data['HargaProduk'],
            "TipeProduk"=>$data['TipeProduk'],
        );
        $this->db->where('idProduk', $data['idProduk']);
        $update = $this->db->update('produk',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function deleteProduk($id){
        $table = 'produk';
        $this->db->where('idProduk', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}