<?php foreach ($variabel as $key => $value) {
	$id = $value->id_variabel;
	$this->db->select('*');
  	$this->db->from('kategori');
  	$this->db->where('id_variabel', $id);
  	$data = $this->db->get()->result();

  	foreach ($data as $key => $value) {
  		
  	}
  }?>
