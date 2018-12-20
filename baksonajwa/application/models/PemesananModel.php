<?php 
 
class PemesananModel extends CI_Model{ 

    function getDataPemesanan(){   
        $query = $this->db->get('pemesan');
        // Jika data lebih dari 0, return array
        if( $query->num_rows() > 0 ) {
            $result = $query->result();
        } else {    
            $result = FALSE;
        }

        return $result;
    }
    function insertPemesanan($data){
        $param = array(
            "namaCust"=>$data['namaCust'],
			"namaInstansi"=>$data['namaInstansi'],
            "CP"=>$data['CP'],
            "alamatCust"=>$data['alamatCust'],
            "pesanan"=>$data['pesanan'],
            "totalHarga"=>$data['totalHarga'],
            "status"=>$data['status'],
            "tglPesan"=>$data['tglPesan'],
            "tglBayar"=>$data['tglBayar'],
            "TotaldiBayar"=>$data['TotaldiBayar'],
        );
        $insert = $this->db->insert('pemesan', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function updatePemesanan($data){
        $param = array(
            "namaCust"=>$data['namaCust'],
			"namaInstansi"=>$data['namaInstansi'],
            "CP"=>$data['CP'],
            "alamatCust"=>$data['alamatCust'],
            "pesanan"=>$data['pesanan'],
            "totalHarga"=>$data['totalHarga'],
            "status"=>$data['status'],
            "tglPesan"=>$data['tglPesan'],
            "tglBayar"=>$data['tglBayar'],
            "TotaldiBayar"=>$data['TotaldiBayar'],
        );
        $this->db->where('idPemesanan', $data['idPemesanan']);
        $update = $this->db->update('pemesan',$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function deletePemesanan($id){
        $table = 'pemesan';
        $this->db->where('idPemesanan', $id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}