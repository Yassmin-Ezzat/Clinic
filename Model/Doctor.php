<?php
class Doctor
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $specialty;
    private $universityName;

    public function __construct($id, $name, $email, $password, $specialty, $universityName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->specialty = $specialty;
        $this->universityName = $universityName;
    }

    public static function getdoctor($id)
    {
        include "../includes/dbh.inc.php";
        $query = "SELECT * FROM `doctor` WHERE `id` = $id";
        $result = mysqli_query($connection, $query);
        return $result;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSpecialty()
    {
        return $this->specialty;
    }

    public function getUniversityName()
    {
        return $this->universityName;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    public function setUniversityName($universityName)
    {
        $this->universityName = $universityName;
    }
}
