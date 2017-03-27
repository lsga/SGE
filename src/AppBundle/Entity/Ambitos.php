<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ambitos
 *
 * @ORM\Table(name="ambitos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AmbitosRepository")
 */
class Ambitos
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
     * @ORM\Column(name="NombreAmbito", type="string", length=255)
     */
    private $nombreAmbito;


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
     * Set nombreAmbito
     *
     * @param string $nombreAmbito
     *
     * @return Ambitos
     */
    public function setNombreAmbito($nombreAmbito)
    {
        $this->nombreAmbito = $nombreAmbito;

        return $this;
    }

    /**
     * Get nombreAmbito
     *
     * @return string
     */
    public function getNombreAmbito()
    {
        return $this->nombreAmbito;
    }
}
