<?php

class Mytable{
    const USER = "root";
    const PASSWD = "";
    const SERVER = "localhost";
    const BASE = "restos";
    private $nameCol = array();
    private $donneeCol = array();
    private $stmt;

    public function __construct(string $_table){
            
        $dsn = "mysql:dbname=".self::BASE.";host=".self::SERVER;

        try {
            
            $connexion = new PDO($dsn, self::USER, self::PASSWD);
            $sql = "SELECT * from ".$_table;
            $this->stmt = $connexion->query($sql);
            //var_dump($stmt->fetchAll());

        } catch (PDOException $e) {

            printf("Echec de la connexion : %s\n", $e->getMessage());
            
        }

    }
    
    public function getStmt(){
        return $this->stmt;
    }
    
    public function recupererNomCol(){

        for ($i=0; $i < $this->stmt->columnCount(); $i++) {
            
            $tabInfo = $this->stmt->getColumnMeta($i);
            // echo "nomCol : ".$tabInfo["name"]."<br>";
            $this->nameCol[$i] = $tabInfo["name"];
        }
        return $this->nameCol;
    }

     

    public function readData(){
        $this->donneeCol= $this->stmt->fetchAll(PDO::FETCH_NUM);
        return $this->donneeCol;
        
    }

    
    
   








}