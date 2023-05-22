<?php

namespace classes;

use PDO;

class Guionista
{
    protected $id;
    protected $nombre_completo;
    protected $bibliografia;
    protected $url_profile;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }

    /**
     * @return mixed
     */
    public function getBibliografia()
    {
        return $this->bibliografia;
    }

    /**
     * @return mixed
     */
    public function getUrlProfile()
    {
        return $this->url_profile;
    }

    public function getAll(): array {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM guionista";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id):array {
        if(!$id) return [];
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM guionista WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute(
            [
                'id' => 1
            ]
        );

        return $stmt->fetchAll();
    }

}