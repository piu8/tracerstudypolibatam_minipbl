<?php
if (!class_exists('Database')) {
class Database
{
    // private $host = "localhost";
    // private $user = "id20956510_rafi";
    // private $pass = "Rafi1234567!";
    // private $db = "id20956510_tracer_study2"; // Nama Database
    // private $koneksi;

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "tracer_study2"; // Nama Database
    private $koneksi;

    

    public function __construct()
    {
        $this->koneksi = $this->connect();
        if (!$this->koneksi) {
            die("Gagal koneksi: " . mysqli_connect_error());
        }
    }

    protected function connect()
    {
        $koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        return $koneksi;
    }

    public function getKoneksi()
    {
        return $this->koneksi;
    }
}
}
// Contoh penggunaan
$database = new Database();
$koneksi = $database->getKoneksi();
// Gunakan $koneksi untuk melakukan operasi database pada MySQL
?>