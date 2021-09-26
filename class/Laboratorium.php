<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/Format.php');
?>

<?php
    class Laboratorium{
        private $db;
        private $fm;
    
        public	function __construct(){
           $this->db   = new Database();
           $this->fm   = new Format();
        }

        public function laboratoriumInsert($data){
            $labName = mysqli_real_escape_string($this->db->link, $data['LaboratoriumName']);
            $labTelepon = mysqli_real_escape_string($this->db->link, $data['Telepon']);
            $Address = mysqli_real_escape_string($this->db->link, $data['Alamat']);
            $Email = mysqli_real_escape_string($this->db->link, $data['Email']);
            $Profile = mysqli_real_escape_string($this->db->link, $data['Profile']);
            $Ketentuan = mysqli_real_escape_string($this->db->link, $data['Ketentuan']);

            if($labName == "" || $labTelepon == "" || $Address == "" || $Email == "" || $Profile == "" || $Ketentuan == ""){
                $msg = "<span class='text-danger'>Field Must Not be empty .</span> ";
    			return $msg;
            }
            else{
                $query = "INSERT INTO laboratorium (Name, Phone, Address, Email, Profile, Ketentuan, CreatedAt) VALUES ('$labName', '$labTelepon', '$Address', '$Email', '$Profile', '$Ketentuan', CURRENT_TIMESTAMP)";

                $inserted_row = $this->db->insert($query);
                if ($inserted_row) {
                    $msg = "<span class='success'>Product Inserted Successfully.</span> ";
                    return $msg;
                }else {
                    $msg = "<span class='text-danger'>Product Not Inserted .</span> ";
                    return $msg;
                } 
            }
        }

        public function ShowAllLab(){
            $query = "SELECT * FROM laboratorium";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>