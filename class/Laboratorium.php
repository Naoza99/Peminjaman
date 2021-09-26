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
            $Address = mysqli_real_escape_string($this->db->link, $data['Address']);
            $Email = mysqli_real_escape_string($this->db->link, $data['Email']);
            $Profile = mysqli_real_escape_string($this->db->link, $data['Profile']);
            $Ketentuan = mysqli_real_escape_string($this->db->link, $data['Ketentuan']);

            if($labName == "" || $labTelepon == "" || $Address == "" || $Email == "" || $Profile == "" || $Ketentuan == ""){
                $msg = "<span class='text-danger'>Field Must Not be empty .</span> ";
    			return $msg;
            }
            else{
                $query = "INSERT INTO Laboratorium (Name, Phone, Address, Email, Profile, Ketentuan) VALUES ('$labName', '$labTelepon', '$Address', '$Email', '$Profile', '$Ketentuan')";

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
    }
?>