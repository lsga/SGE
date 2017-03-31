<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RespuestaRepository")
 */
class Respuesta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="Ponderacion", type="integer")
     */
    private $ponderacion;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Indicadores", cascade={"persist"})
     */
    private $idIndicador;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Respuesta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ponderacion
     *
     * @param integer $ponderacion
     *
     * @return Respuesta
     */
    public function setPonderacion($ponderacion)
    {
        $this->ponderacion = $ponderacion;

        return $this;
    }

    /**
     * Get ponderacion
     *
     * @return int
     */
    public function getPonderacion()
    {
        return $this->ponderacion;
    }

    /**
     * Set idIndicador
     *
     * @param AppBundle\Entity\Indicadores $idIndicador
     *
     * @return Respuesta
     */
    public function setIdIndicador(AppBundle\Entity\Indicadores $idIndicador = null)
    {
        $this->idIndicador = $idIndicador;

        return $this;
    }

    /**
     * Get idIndicador
     *
     * @return AppBundle\Entity\Ambitos
     */
    public function getIdIndicador()
    {
        return $this->idIndicador;
    }
}
