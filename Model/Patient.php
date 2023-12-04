<?php
require_once("../model/Model.php");
include "../DB/Dbh.php";
?>

<?php
class User extends Model
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $age; 
    private $address;

    function __construct($id, $name = "", $password = "", $age = "", $address = "",$email="")
    {
        $this->id = $id;
        $this->db = $this->connect();

        if ("" === $name) {
            $this->readUser($id);
        } else {
            $this->name = $name;
            $this->password = $password;
            $this->age = $age;
            $this->address = $address;
            $this->email=$email;
        }
    }

    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        return $this->name = $name;
    }

    function getPassword()
    {
        return $this->password;
    }
    function setPassword($password)
    {
        return $this->password = $password;
    }

    function getAge()
    {
        return $this->age;
    }
    function setAge($age)
    {
        return $this->age = $age;
    }

    function getAddress()
    {
        return $this->address;
    }
    function setAddress($address)
    {
        return $this->address = $address;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        return $this->email = $email;
    }


    function getID()
    {
        return $this->id;
    }

    function readUser($id)
    {
        $sql = "SELECT * FROM user where id=" . $id;
        $db = $this->connect();
        $result = $db->query($sql);
        if ($result->num_rows == 1) {
            $row = $db->fetchRow();
            $this->name = $row["name"];
            $_SESSION["Name"] = $row["Name"];
            $this->email=$row["Email"];
            $this->password = $row["password"];
            $this->age = $row["age"];
            $this->address = $row["Address"];
        } else {
            $this->name = "";
            $this->email="";
            $this->password = "";
            $this->age = "";
            $this->address = "";
        }
    }

    function editUser($name, $password, $age, $address,$email)
    {
        $sql = "UPDATE `user` SET name='$name', Email='$email', password='$password', Address='$address', age='$age' where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "updated successfully.";
            $this->readUser($this->id);
        } else {
            echo "ERROR: Could not able to execute $sql. " . $connection->error;
        }
    }

    function deleteUser()
    {
        $sql = "delete from user where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "deletet successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . $connection->error;
        }
    }
}
