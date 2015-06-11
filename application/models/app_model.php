<?php ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class App_model extends CI_Model {


    function  __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
    
    private $table_name = 'custom_post';
    private $table_name1 = 'contact';
    private $primary_key = 'no';
    
function get_data($table) {
    $data = $this->db->get($table);
    return $data->result();
}

function getSelectedreviewData($table,$var2,$limit,$offset)
	{
		$data1 =  $this->db->query('select * from '.$table.'      where category_post="'.$var2.'"   ORDER BY no Desc limit '.$offset.','.$limit.'  ');
                return $data1->result();
	}
        
        
        function getSelectedgalleryData($table,$limit,$offset)
	{
		$data1 =  $this->db->query('select * from '.$table.'   ORDER BY no Desc limit '.$offset.','.$limit.'  ');
                return $data1->result();
	}
        
        function getselectednewdata32($category) {
             $data1 =  $this->db->query('select * from custom_post where category_post1="'.$category.'" order by no DESC limit 7    ');
                return $data1->result();
        }
        
         function getselectednewdata321($category) {
             $data1 =  $this->db->query('select * from custom_post where category_post1="'.$category.'" order by no DESC    ');
                return $data1->result();
        }
        
        function get_data_limit() {
            $data1 =  $this->db->query('select * from subcategory_product order by no desc limit 4    ');
                return $data1->result();
            
        }
        
        
function querycompare($param)
	{
		$data1 =  $this->db->query('select * from cameradescription where '.$param.'  ');
                return $data1->result();
	}
        
        function querycompare2($param)
	{
		$data1 =  $this->db->query('select * from product where '.$param.'  ');
                return $data1->result();
	}
        
        
        function getSelectedDatachild($table,$param1,$param2) {
            $data1 =  $this->db->query('select * from child_category where subcat="'.$param1.'" and parentsubcat="'.$param2.'"  ');
                return $data1->result();
        }
        


public function getSelectedData($table,$data)
	{
		$data1 =  $this->db->get_where($table,$data);
                return $data1->result();
	}
        
        public function getSelectedRandom($table,$where) {
                $this->db->limit(8);
                $this->db->order_by("no", "random");
                $data1 =  $this->db->get_where($table,$where);
                return $data1->result();
        }
        
        
        
        public function getSelectedDataDesc($table,$data)
	{
    $this->db->order_by("no", "Desc");
		$data1 =  $this->db->get_where($table,$data);
                return $data1->result();
	}
        
        
        
        
        
        
        public function getNew($table)
	{
                $this->db->limit(4);
                $this->db->order_by("no", "Desc");
		$data1 =  $this->db->get($table);
                return $data1->result();
	}
        
        
         
        
 public function getSelectedDatarand($table,$data)
	{
                $this->db->order_by("no", "random");
		$data1 =  $this->db->get_where($table,$data);
                return $data1->result();
	}       
        
        
        function getSelectedDatatrack($provinsi,$kota)
	{
		$data1 =  $this->db->query('select * from traking where provinsi="'.$provinsi.'" and kota="'.$kota.'"  ');
                return $data1->result();
	}
        
  
        public function getSelectedData127($table,$data)
	{
                $this->db->order_by("no", "desc");
		$data1 =  $this->db->get_where($table,$data);
              return $data1->result();
	}
        
        
         public function getSelectedData121($table,$data)
	{
             $this->db->limit(4);
                $this->db->order_by("no", "desc");
		$data1 =  $this->db->get_where($table,$data);
                return $data1->result();
	}
        

   
        
        public function getSelectedDatadistinct($table)
	{

		$data1 =  $this->db->query('select DISTINCT nama_category from '.$table.'  ');
                return $data1->result();
	}
        
         public function Selecteddistinct1($table)
	{

		$data1 =  $this->db->query('select DISTINCT provinsi from '.$table.'  ');
                return $data1->result();
	}
        
        
        function getSelectedDatatrackcheck($provinsi,$kota,$paket)
	{
            
            if($paket =='Regular') {
                $pakets = 'Regular' ;
            }else if($paket =='Yes') {
                $pakets = 'Yes';
            }else if($paket =='Oke') {
                 $pakets = 'Oke';
            }
            
		$data1 =  $this->db->query('select '.$paket.' from traking where provinsi="'.$provinsi.'" and kota="'.$kota.'"');
                return $data1->result();
	}
        
 
        public function getSelectedDataDistinct1($table)
	{

		$data1 =  $this->db->query('select DISTINCT categorylabel from customdescriptions where desccategory="'.$table.'"');
                return $data1->result();
	}
        
        
        
 public function getchildcategory($table,$data)
	{
		$data1 =  $this->db->query('select * from '.$table.' where subcat="'.$data.'" ');
                return $data1->result();
	}        
        
        
        
        public function getSelectedData1($table,$data)
	{
		$data1 =  $this->db->query('select * from '.$table.' where categoryproduct="'.$data.'" or parentcategoryproduct="'.$data.'"  ');
                return $data1->result();
	}
        
        
        
        public function getSelectedDatamulti($table,$data)
	{
		$data1 =  $this->db->query('select * from '.$table.' where type="'.$data.'" ');
                return $data1->result();
	}
        
        
        public function getSelectedDatapaging($table,$data,$limit,$offset)
	{
		$data1 =  $this->db->query('select * from1 '.$table.' where categoryproduct="'.$data.'" order by no desc limit '.$offset.','.$limit.'');
                return $data1->result();
	}

public function getSelectedNewData($table,$data)
	{
		$data1 =  $this->db->query('select * from '.$table.' where category_post1="'.$data.'" order by no desc limit 4');
                return $data1->result();
	}
        
        public function getSelectedNewData1($table)
	{
		$data1 =  $this->db->query('select * from '.$table.'  order by no desc limit 6');
                return $data1->result();
	}
        
        
        public function getNewData($table)
	{
		$data1 =  $this->db->query('select * from '.$table.'  order by no desc');
                return $data1->result();
	}
        
        
         public function getnewdata1($table)
                 
	{
                $this->db->limit(12);
                $this->db->order_by("no", "desc");
		$data1 =  $this->db->get($table);
                return $data1->result();
	}
        
        
        
        
        
        
        
        public function getSelectedDataCategory($data)
                {         
                        $data1 = $this->db->query('select category_post.nama_category from category_post,custom_post where custom_post.no=1');                
                        return $data1->result();
                }
        
        public function getAllSelectedDataCategory()
                {         
                        $data1 = $this->db->query('select * from category_post');                
                        return $data1->result();
                }        






        function get_backend_menu() {
            $status = $this->session->userdata('status1');

            
        if($status != 'member') {
            if ($status == 'admin' ) {
            $query = $this->db->query('select * from backend_menu where akses_menu ="admin" ');
            }elseif($status == 'user') {
            $query = $this->db->query('select * from backend_menu where akses_menu2 ="user" ');   
            }
            return $query->result();
        } else {
            redirect('administrator');
        }    
            
        }

        public function count_table_rows($table) {
            return $this->db->count_all($table);
        }

        public function get_data_post($table,$limit,$offset) {

            $query = $this->db->query('select * from '.$table.' order by no Desc limit '.$offset.','.$limit.'   ');
            return $query->result();

        }
        
         public function get_data_postusermember($table,$limit,$offset) {

            $query = $this->db->query('select * from '.$table.' where status="member" order by no Desc limit '.$offset.','.$limit.'   ');
            return $query->result();

        }
        
        
         public function get_data_postdownload($table,$limit,$offset,$where) {

            $this->db->limit($limit);
            $this->db->offset($offset);
                $this->db->order_by("no", "desc");
		$query =  $this->db->get_where($table,$where);
            return $query->result();

        }
        

        public function prosescontact() {
            $data = array(
                'full_name'=> $this->input->post('full_name'),
                'email'=> $this->input->post('address'),
                'telp'=> $this->input->post('telp'),
                'message'=> $this->input->post('message'),
                'date'=> date('D-M-Y'),

            );

            $this->db->insert('contact',$data);
            redirect('admin/page/contact/');

        }


        public function deletecontact($id) {    
            $this->db->where($this->primary_key,$id);
            $this->db->delete($this->table_name1);
            header('location:'.base_url().'admin/contact/');
        }






        public function get_data_post_rand($table,$limit,$category) {
            $query = $this->db->query('select * from '.$table.' where parentcategoryproduct="'.$category.'" order by rand() limit '.$limit.'   ');
            return $query->result();    
        }

  
         
        public function getdataacount($table,$data)
	{
		$data1 =  $this->db->query('select * from '.$table.' where status="'.$data.'"  ');              
                $count = $data1->num_rows();
                return $count;
	}
        
        


        function searchproductt($param) {
            $q = $this->db->query("select * from product where title_product like '".$param."' ");
            return $q;

        }
        
        public function countkomentar($table,$data)
	{
		$data1 =  $this->db->query('select * from '.$table.' where idproduct="'.$data.'"  ');              
$count = $data1->num_rows();
return $count;
	}


public function getSelectedData3($table,$data,$parameter)
	{
		$data1 =  $this->db->query('select * from customdescriptions where categorylabel="'.$data.'" and desccategory="'.$parameter.'"  ');
                return $data1->result();
	}
        
      
        public function getDataDesc($table) {
            $this->db->order_by('no','desc');
            $data1 =  $this->db->get($table);
            return $data1->result();
        }
        
        
         public function getDataDescLimit($table,$limit)
	{
             $this->db->limit($limit);
                $this->db->order_by("no", "desc");
		$data1 =  $this->db->get($table);
                return $data1->result();
	}
        
        function getSelectedDatacustomdesc($data,$parameter) {
            $data1 =  $this->db->query('select * from customdescriptions where categorylabel="'.$data.'" and desccategory="'.$parameter.'"  ');
                return $data1->result();
        }
        
        public function countJmlSlider($data)
	{
		$data1 =  $this->db->query('select * from slider where category_name="'.$data.'"  ');              
                $count = $data1->num_rows();
                return $count;
	}
        
        public function getThemeActive($database) {
                $data1 =  $this->db->query('select * from '.$database.' where status="active"  ');              
                foreach ($data1->result() as $cont ) {
                $id_theme = $cont->id_theme;
                }
                return $id_theme;
        }
        
        public function getTemplates($namepages,$themeActive) {
                $data =  $this->db->query('select * from templatedesignlayout where id_theme="'.$themeActive.'" and name_pages="'.$namepages.'"  ');
                return $data->result();
        }
        
        public function checkSetupThemes($namepages,$themeActive) {
                $data =  $this->db->query('select * from templatedesignlayout where id_theme="'.$themeActive.'" and name_pages="'.$namepages.'"  ');
                return $data->num_rows();
        }
    
}

?>