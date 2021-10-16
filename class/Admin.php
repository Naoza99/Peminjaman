<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Session.php');
    Session::checkLogin();
    
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/Format.php');
?>

<?php
    class AdminLogin{
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function adminLogin($adminUser, $adminPass){
            $adminUser = $this->fm->validation($adminUser);
            $adminPass = $this->fm->validation($adminPass);

            $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

            $query = "SELECT * FROM admin WHERE Username = '$adminUser' AND Password = '$adminPass' AND isActive = '1'";
            $result = $this->db->select($query);

            if($result){
                $value = $result->fetch_assoc();
                Session::set("adminLogin", true);
                Session::set("adminId", $value['adminId']);
                Session::set("adminUser", $value['Username']);
                header("Location:home.php");
            }
            else{
                $loginmsg = "Username or Password tidak sesuai";
                return $loginmsg;
            }
        }
    }
?>