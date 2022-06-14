<?php
namespace ITEC\DAW\PROGRAM\basedatos;
use Exception;

use mysqli;

class database{
    private string $host="localhost";
    private string $user="root";
    private string $password="1234";
    private string $bdname="";
    private string $port="3306";
    private string $code = "UTF8";

    //Instanciar esta clase = siempre se llama al constructor
    public function __construct($host="localhost", $bdname="" ,$user="root", $password="1234", $port="3306", $code = "UTF8"){
        $this->bdname=$bdname;
        $this-> host = "MYSQLhost= " . $host;
        $this-> user = $user;
        $this-> password = $password; 
        $this-> port = $port;
        $this-> code = $code;

        try{
            $bdh = new mysqli($this->host, $this->bdname, $this->user, $this->password, $this->port, $this->code);
            if(mysqli_connect_errno()){
                throw new Exception("Error al conectar con la base de datos");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }
}