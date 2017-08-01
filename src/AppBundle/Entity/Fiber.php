<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiber
 *
 * @ORM\Table(name="fiber")
 * @ORM\Entity
 */
class Fiber
{
    /**
     * @var integer
     *
     * @ORM\Column(name="loc_a", type="integer", nullable=false)
     */
    private $locA = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_b", type="integer", nullable=false)
     */
    private $locB = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="cores", type="integer", nullable=false)
     */
    private $cores = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="map", type="text", length=65535, nullable=false)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=false)
     */
    private $notes;

    /**
     * @var integer
     *
     * @ORM\Column(name="asset_num", type="integer", nullable=false)
     */
    private $assetNum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="connector_a", type="string", length=32, nullable=false)
     */
    private $connectorA = '';

    /**
     * @var string
     *
     * @ORM\Column(name="connector_b", type="string", length=32, nullable=false)
     */
    private $connectorB = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rack_a", type="string", length=32, nullable=false)
     */
    private $rackA = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rack_b", type="string", length=32, nullable=false)
     */
    private $rackB = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unum_a", type="string", length=32, nullable=false)
     */
    private $unumA = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unum_b", type="string", length=32, nullable=false)
     */
    private $unumB = '';

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

