<?php 
    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/Format.php');
?>

<?php
    class UserLogin{
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function UserRegistration($data){
            
            $Username = mysqli_real_escape_string($this->db->link, $data['Username']);
            $NIM = mysqli_real_escape_string($this->db->link, $data['NIM']);
            $Password = mysqli_real_escape_string($this->db->link, $data['Password']);
            $Email = mysqli_real_escape_string($this->db->link, $data['Email']);

            $query = "INSERT INTO User (Username, NIM, Password, Email) VALUES ('$Username', '$NIM', '$Password', '$Email')";
            $result = $this->db->insert($query);

            if($result){
                if($Username = "" || $NIM = "" || $Password = "" || $Email = ""){
                    $loginmsg = "Field cannot be Empty";
                    return $loginmsg;
                }
                else{
                    $loginmsg = "User berhasil didaftarkan";
                    return $loginmsg;
                }
            }
            else{
                $loginmsg = "User gagal didaftarkan";
                return $loginmsg;
            }
        }

        public function getUserData(){
            $query = "SELECT * FROM user";
            $result = $this->db->select($query);
            return $result;
        }

        public function getUserById($id){
            $query = "SELECT * FROM user WHERE UserId = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function UpdateUser($data, $id){

            $Username = mysqli_real_escape_string($this->db->link, $data['Username']);
            $NIM = mysqli_real_escape_string($this->db->link, $data['NIM']);
            $Password = mysqli_real_escape_string($this->db->link, $data['Password']);
            $Email = mysqli_real_escape_string($this->db->link, $data['Email']);

            $query =    "UPDATE user
                        SET Username = '$Username', NIM = '$NIM', Password = '$Password', Email = '$Email'
                        WHERE UserId = '$id'";
            $result = $this->db->update($query);
            
            if($result){
                if($Username = "" || $NIM = "" || $Password = "" || $Email = ""){
                    $loginmsg = "Field cannot be Empty";
                    return $loginmsg;
                }
                else{
                    $loginmsg = "User berhasil di-update";
                    return $loginmsg;
                }
            }
            else{
                $loginmsg = "User gagal di-update";
                return $loginmsg;
            }
        }

        public function deleteUserById($id){            
            $query = "DELETE FROM user WHERE UserId = '$id'";
            $result = $this->db->delete($query);
            
            if($result){
                $msg = "User Berhasil dihapus";
                return $msg;
            }
            else{
                $msg = "User gagal dihapus";
                return $msg;
            }
        }
    }
?>