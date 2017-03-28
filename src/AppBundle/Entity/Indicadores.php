<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indicadores
 *
 * @ORM\Table(name="indicadores")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IndicadoresRepository")
 */
class Indicadores
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
     * @var int
     *
     *  @ORM\ManyToOne(targetEntity="AppBundle\Entity\Items", cascade={"persist"})
     */
    private $idItem;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set idItem
     *
     * @param AppBundle\Entity\Items $idItem
     *
     * @return Indicadores
     */
    public function setIdItem(AppBundle\Entity\Items $idItem = null)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return AppBundle\Entity\Items
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Indicadores
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
}
