<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/Format.php');
?>
 
 <?php
    class Alat{
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function ShowAllAlatCategory(){
            $query = "SELECT * FROM AlatCategory";
            $result = $this->db->select($query);
            return $result;
        }

        public function ShowAllSatuan(){
            $query = "SELECT * FROM satuan";
            $result = $this->db->select($query);
            return $result;
        }

        public function ShowKondisiAlat(){
            $query = "SELECT * FROM KondisiALat";
            $result = $this->db->select($query);
            return $result;
        }

        public function AlatInsert($data, $file){
            $AlatName = mysqli_real_escape_string($this->db->link, $data['AlatName']);
            $AlatCategoryId = mysqli_real_escape_string($this->db->link, $data['AlatCategoryId']);
            $Jumlah = mysqli_real_escape_string($this->db->link, $data['Jumlah']);
            $Satuan = mysqli_real_escape_string($this->db->link, $data['SatuanId']);
            $datepicker = mysqli_real_escape_string($this->db->link, $data['datepicker']);
            $LaboratoriumId = mysqli_real_escape_string($this->db->link, $data['LaboratoriumId']);
            $KondisiAlat = mysqli_real_escape_string($this->db->link, $data['KondisiAlatId']);

            $permited = array('jpg','png','jpeg','gif');
            $file_name = $file['image']['name'];
            $file_size = $file['image']['size'];
            $file_temp = $file['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;

            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO Alat (Name, AlatCategoryId, Jumlah, SatuanId, TanggalMasuk, LokasiSimpanId, KondisiALatId, Image, CreatedAt) 
            VALUES ('$AlatName', '$AlatCategoryId', '$Jumlah', '$Satuan', '$datepicker', '$LaboratoriumId', '$KondisiAlat', '$uploaded_image', CURRENT_TIMESTAMP)";
            $insert = $this->db->insert($query);
            if ($insert) {
    			$msg = "Product Inserted Successfully.";
    			return $msg;
    		}else {
    			$msg = "Product not Inserted";
    			return $msg;
    		} 
        }
    }
 ?>