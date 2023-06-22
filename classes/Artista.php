<?php

namespace classes;

use PDO;

class Artista
{
    protected $id;
    protected $nombre_completo;
    protected $biografia;
    protected $foto_perfil;

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
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * @return mixed
     */
    public function getFotoPerfil()
    {
        return $this->foto_perfil;
    }


    public function getAll(): array
    {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM artista";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $conexion = (new Connection())->getConection();
        $query = "SELECT * FROM artista WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute(
            [
                'id' => $id
            ]
        );
        $result =  $stmt->fetch();
        if(!$result) return null;
        return $result;
    }

    public function add($nombre_completo, $biografia, $foto_perfil) {
        echo "Agregando artista: ".$nombre_completo." ".$biografia." ".$foto_perfil;
    }

}