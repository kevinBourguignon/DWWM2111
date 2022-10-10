<?php

namespace App\Models;

use \PDO;


class Delete
{
    private PDO $dbconnect;


    public function __construct(DbConnect $connect)
    {
        $this->dbconnect = $connect->getPdo();
    }

      /** 
     * @return array le résultat de la requête sous forme de tableau. Le tableau contient des instances de Car
    */
    public function selectAll(): array
    {
        $sql = "SELECT id, name, release FROM cars;";
        $stmt = $this->dbconnect->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Car::class);
        return $result;
    }


    public function select(int $id): Car
    {
        $sql = "SELECT id, name, release FROM cars WHERE id=:id";
        $stmt = $this->dbconnect->prepare($sql);

        $stmt->execute([
            ':id' => $id
        ]);

        $result = $stmt->fetch(PDO::FETCH_CLASS, Car::class);

        $stmt->closeCursor();

        return $result;
        
    }

    // public function supprimer(Car $car): void
    // {
    //     $sql = "DELETE FROM cars WHERE id =:id";

    //     $stmt = $this->dbconnect->prepare($sql);

    //     $stmt->execute([
    //         ':id' => $car->id,
            
    //     ]);

    //     $stmt->closeCursor();
    // }  

    public function supprimer(Car $car): int
    {
        return $this->dbconnect->exec("DELETE FROM cars WHERE id= ".$car->id);
    }

}



