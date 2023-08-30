<?php 
class cv59_model extends CI_Model{
	function get_biodata(){
		$result = $this->db->get('biodata');
		return $result;
	}
	function get_bio(){
		$result = $this->db->get('biodata')->result_array();
		return $result;
	}
	function save_bio($nm_lngkp,$nm_pngln,$jk,$agama,$tmpt_lhr,$tgl_lahir,$alamat){
		$data = array(
			'nm_lngkp' => $nm_lngkp, 
			'nm_pngln' => $nm_pngln,
			'jk' => $jk,
			'agama' => $agama,
			'tmpt_lhr' => $tmpt_lhr,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,);
		$this->db->insert('biodata',$data);
	}
	function delete_bio($id_bio){
		$this->db->where('id_bio',$id_bio);
		$this->db->delete('biodata');
	}
	function get_id_bio($id_bio){
		$query = $this->db->get_where('biodata',array('id_bio' => $id_bio));
		return $query;
	}
	function update_bio($id_bio,$nm_lngkp,$nm_pngln,$jk,$agama,$tmpt_lhr,$tgl_lahir,$alamat){
		$data = array(
			'nm_lngkp' => $nm_lngkp,
			'nm_pngln' => $nm_pngln,
			'jk' => $jk,
			'agama' => $agama,
			'tmpt_lhr' => $tmpt_lhr,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat);
		$this->db->where('id_bio',$id_bio);
		$this->db->update('biodata',$data);
	}

	function get_keahlian(){
		$result = $this->db->get('keahlian');
		return $result;
	}
	function get_ahli(){
		$result = $this->db->get('keahlian')->result_array();
		return $result;
	}
	function save_ahli($ahli1,$ahli2,$ahli3,$ahli4,$ukuran1,$ukuran2,$ukuran3,$ukuran4,$id_bio){
		$data = array(
			'ahli1' => $ahli1,
			'ahli2' => $ahli2,
			'ahli3' => $ahli3,
			'ahli4' => $ahli4,
			'ukuran1' => $ukuran1,
			'ukuran2' => $ukuran2,
			'ukuran3' => $ukuran3,
			'ukuran4' => $ukuran4,
			'id_bio' => $id_bio);
		$this->db->insert('keahlian',$data);
	}
	function delete_ahli($id_ahli){
		$this->db->where('id_ahli',$id_ahli);
		$this->db->delete('keahlian');
	}
	function get_id_ahli($id_ahli){
		$query = $this->db->get_where('keahlian',array('id_ahli' => $id_ahli));
		return $query;
	}
	function update_ahli($id_ahli,$ahli1,$ahli2,$ahli3,$ahli4,$ukuran1,$ukuran2,$ukuran3,$ukuran4,$id_bio){
		$data = array(
			'ahli1' => $ahli1,
			'ahli2' => $ahli2,
			'ahli3' => $ahli3,
			'ahli4' => $ahli4,
			'ukuran1' => $ukuran1,
			'ukuran2' => $ukuran2,
			'ukuran3' => $ukuran3,
			'ukuran4' => $ukuran4,
			'id_bio' => $id_bio);
		$this->db->where('id_ahli',$id_ahli);
		$this->db->update('keahlian',$data);
	}

	function get_pendidikan(){
		$result = $this->db->get('pendidikan');
		return $result;
	}
	function get_pend(){
		$result = $this->db->get('pendidikan')->result_array();
		return $result;
	}
	function save_pend($sd,$smp,$sma,$kuliah,$thsd,$thsmp,$thsma,$thkuliah,$id_bio){
		$data = array(
			'sd' => $sd,
			'smp' => $smp,
			'sma' => $sma,
			'kuliah' => $kuliah,
			'thsd' => $thsd,
			'thsmp' => $thsmp,
			'thsma' => $thsma,
			'thkuliah' => $thkuliah,
			'id_bio' => $id_bio);
		$this->db->insert('pendidikan',$data);
	}
	function delete_pend($id_pen){
		$this->db->where('id_pen',$id_pen);
		$this->db->delete('pendidikan');
	}
	function get_id_pend($id_pen){
		$query = $this->db->get_where('pendidikan',array('id_pen' => $id_pen));
		return $query;
	}
	function update_pend($id_pen,$sd,$smp,$sma,$kuliah,$thsd,$thsmp,$thsma,$thkuliah,$id_bio){
		$data = array(
			'sd' => $sd,
			'smp' => $smp,
			'sma' => $sma,
			'kuliah' => $kuliah,
			'thsd' => $thsd,
			'thsmp' => $thsmp,
			'thsma' => $thsma,
			'thkuliah' => $thkuliah,
			'id_bio' => $id_bio);
		$this->db->where('id_pen',$id_pen);
		$this->db->update('pendidikan',$data);
	}

	function get_kontak(){
		$result = $this->db->get('kontak');
		return $result;
	}
	function get_kont(){
		$result = $this->db->get('kontak')->result_array();
		return $result;
	}
	function save_kont($no_hp,$no_wa,$fb,$ig,$email,$id_bio){
		$data = array(
			'no_hp' => $no_hp,
			'no_wa' => $no_wa,
			'fb' => $fb,
			'ig' => $ig,
			'email' => $email,
			'id_bio' => $id_bio);
		$this->db->insert('kontak',$data);
	}
	function delete_kont($id_kontak){
		$this->db->where('id_kontak',$id_kontak);
		$this->db->delete('kontak');
	}
	function get_id_kont($id_kontak){
		$query = $this->db->get_where('kontak',array('id_kontak' => $id_kontak));
		return $query;
	}
	function update_kont($id_kontak,$no_hp,$no_wa,$fb,$ig,$email,$id_bio){
		$data = array(
			'no_hp' => $no_hp,
			'no_wa' => $no_wa,
			'fb' => $fb,
			'ig' => $ig,
			'email' => $email,
			'id_bio' => $id_bio);
		$this->db->where('id_kontak',$id_kontak);
		$this->db->update('kontak',$data);
	}	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}


	function cv_biodata($id_bio){
		$this -> db -> select('*');
		$this -> db -> from('biodata');
		

	}	




	public function get_relasiid($id_bio)
{
    $this->db->select('*');
    $this->db->from('biodata');
    $this->db->join('pendidikan','biodata.id_bio = pendidikan.id_bio', 'inner');
    $this->db->join('kontak','biodata.id_bio = kontak.id_bio', 'inner');
    $this->db->join('keahlian','biodata.id_bio = keahlian.id_bio', 'inner');
    $this->db->where('biodata.id_bio', $id_bio);
	$result= $this->db->get();
	return $result;
}

/*public function view_row(){    
	return $this->db->get('siswa')->result();  
}*/

}

	

?>

