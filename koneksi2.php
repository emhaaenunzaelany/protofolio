<?php 
 
class database {

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_portofolio";
    var $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        mysqli_select_db($this->koneksi, $this->database);
    }
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM user");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }
    function tambah_data($nama, $role, $availability, $usia, $lokasi, $pengalaman, $email,)
    {
        mysqli_query($this->koneksi, "INSERT INTO user VALUES (NULL, '$nama', '$role', '$availability', '$usia', '$lokasi', '$pengalaman', '$email')");
    }
}