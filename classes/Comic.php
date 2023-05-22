<?php
namespace classes;
//use Connection;
use PDO;

class Comic
{
    protected $id;
    protected $personaje;
    protected $nombre;
    protected $titulo;
    protected $descripcion;
    protected $imagen;
    protected $guion;
    protected $edicion;
    protected $arte;
    protected $publicacion;
    protected $precio;
    protected $comprar;


    public function getAll($personaje): array {
        $conexion = (new Connection())->getConection();
        if($personaje) {
            $query = "SELECT * FROM comics WHERE id_personaje = '".$personaje."'";
        }else {
            $query = "SELECT * FROM comics";
        }
        $stmt = $conexion->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

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
    public function getPersonaje()
    {
        return $this->personaje;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @return mixed
     */
    public function getGuion()
    {
        return $this->guion;
    }

    /**
     * @return mixed
     */
    public function getEdicion()
    {
        return $this->edicion;
    }

    /**
     * @return mixed
     */
    public function getArte()
    {
        return $this->arte;
    }

    /**
     * @return mixed
     */
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioFormateado() {
        return number_format($this->getPrecio(), 2, ',', '.');
    }

    /**
     * @return mixed
     */
    public function getComprar()
    {
        return $this->comprar;
    }



}