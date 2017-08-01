<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity
 */
class Building
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="floors", type="string", length=128, nullable=false)
     */
    private $floors = '';

    /**
     * @var string
     *
     * @ORM\Column(name="map", type="text", length=65535, nullable=false)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=64, nullable=false)
     */
    private $image = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=48, nullable=false)
     */
    private $shortname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="project", type="integer", nullable=false)
     */
    private $project = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

