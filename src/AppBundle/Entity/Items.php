<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemsRepository")
 */
class Items
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ambitos", cascade={"persist"})
     */
    private $idAmbito;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreItem", type="string", length=255)
     */
    private $nombreItem;


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
     * Set idAmbito
     *
     * @param AppBundle\Entity\Ambitos $idAmbito
     *
     * @return Items
     */
    public function setIdAmbito(AppBundle\Entity\Ambitos $idAmbito = null)
    {
        $this->idAmbito = $idAmbito;

        return $this;
    }

    /**
     * Get idAmbito
     *
     * @return AppBundle\Entity\Ambitos
     */
    public function getIdAmbito()
    {
        return $this->idAmbito;
    }

    /**
     * Set nombreItem
     *
     * @param string $nombreItem
     *
     * @return Items
     */
    public function setNombreItem($nombreItem)
    {
        $this->nombreItem = $nombreItem;

        return $this;
    }

    /**
     * Get nombreItem
     *
     * @return string
     */
    public function getNombreItem()
    {
        return $this->nombreItem;
    }
}
