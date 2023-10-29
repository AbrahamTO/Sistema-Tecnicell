<?php
class Conexion
{
    private string $host = 'localhost';
    private string $user = 'root';
    private string $pass = '';
    private string $db = 'tecnicell';

    private function Conectar()
    {
        return mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function getConectar()
    {
        return $this->Conectar();
    }
}
