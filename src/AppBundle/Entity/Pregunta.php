<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreguntaRepository")
 */
class Pregunta
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
     * @ORM\Column(name="NombrePregunta", type="string", length=255)
     */
    private $nombrePregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripcionEvidencia", type="string", length=255)
     */
    private $descripcionEvidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Evidencia", type="string", length=255)
     */
    private $evidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario", type="string", length=255)
     */
    private $comentario;

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
     * Set nombrePregunta
     *
     * @param string $nombrePregunta
     *
     * @return Pregunta
     */
    public function setNombrePregunta($nombrePregunta)
    {
        $this->nombrePregunta = $nombrePregunta;

        return $this;
    }

    /**
     * Get nombrePregunta
     *
     * @return string
     */
    public function getNombrePregunta()
    {
        return $this->nombrePregunta;
    }

    /**
     * Set descripcionEvidencia
     *
     * @param string $descripcionEvidencia
     *
     * @return Pregunta
     */
    public function setDescripcionEvidencia($descripcionEvidencia)
    {
        $this->descripcionEvidencia = $descripcionEvidencia;

        return $this;
    }

    /**
     * Get descripcionEvidencia
     *
     * @return string
     */
    public function getDescripcionEvidencia()
    {
        return $this->descripcionEvidencia;
    }

    /**
     * Set evidencia
     *
     * @param string $evidencia
     *
     * @return Pregunta
     */
    public function setEvidencia($evidencia)
    {
        $this->evidencia = $evidencia;

        return $this;
    }

    /**
     * Get evidencia
     *
     * @return string
     */
    public function getEvidencia()
    {
        return $this->evidencia;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Pregunta
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Pregunta
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set idIndicador
     *
     * @param AppBundle\Entity\Indicadores $idIndicador
     *
     * @return Pregunta
     */
    public function setIdIndicador(AppBundle\Entity\Indicadores $idIndicador = null)
    {
        $this->idIndicador = $idIndicador;

        return $this;
    }

    /**
     * Get idIndicador
     *
     * @return AppBundle\Entity\Indicadores
     */
    public function getIdIndicador()
    {
        return $this->idIndicador;
    }
}
