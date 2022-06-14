
<?php
// Database connection
use LDAP\Result;

class Database
{
    public $host = 'localhost';
    public $Db_name = 'sotore_ms';
    public $Db_username = 'root';
    public $Db_password = '';
    public $conn;
    public function __construct()
    {
        $this->connection();
    }
    public function connection()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'store_ms');
        if ($this->conn) {
            echo "Connection Established Successfully";
        } else {
            echo "Error" . mysqli_connect_error();
        }
    }
    public function create($firstName, $lastName, $telephone, $emial, $gender, $nationarity, $password)
    {
        $query = "INSERT INTO User(firstname,lastname,telephone,emial,gender,nationarity,password) values('$firstName','$lastName','$telephone','$emial','$gender','$nationarity','$password')";
        $result = mysqli_query($this->connection, $query);
        if ($result) {
            return $result;
        }
    }
    public function read()
    {
        $query = "Select * from users";
        $result = mysqli_query($this->connection, $query);
        if ($result) {
            return $result;
        }
    }
    public function deleteUser()
    {
        $query = "Delete from User where id='userId'";
        $result = mysqli_query($this->connection, $query);
        if ($result) {
            return $result;
        }
    }
    //inserting a product
    public function insertData($post)
    {
        $fistName = $this->connect->real_escape_string($_POST['firstname']);
        $lastName = $this->connect->real_escape_string($_POST['lastname']);
        $telephone = $this->connect->real_escape_string($_POST['telephone']);
        $emial = $this->connect->real_escape_string($_POST['emial']);
        $gender = $this->connect->real_escape_string($_POST['gender']);
        $nationarity = $this->connect->real_escape_string($_POST['nationarity']);
        $password = $this->connect->real_escape_string($_POST['password']);
        $query = "INSERT INTO User(firstname,lastname,telephone,emial,gender,nationarity,password) values('$fistName','$lastName','$telephone','$emial','$gender','$nationarity','$password')";
        $sql = $this->connect->query($query);
        if ($sql == true) {
            echo "Registered sucessfully ";
        } else {
            echo "Registration failed";
        }
    }
    //display data
    public function displayData()
    {
        $query = "Select *from User";
        $sql = $this->connect->query($query);
        if ($sql->rows_number > 0) {
            $data = array();
            while ($row = $sql->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "Nothing Found";
        }
    }
    // Deleting the user
    public function delete($id)
    {
        $query = "Delete from User where id='$id'";
        $sql = $this->connect->query($query);
        if ($sql == true) {
            echo "User Deleted";
        } else {
            echo "User was not deleted try again";
        }
    }
}
$db = new Database();
echo $db->connection();
?>