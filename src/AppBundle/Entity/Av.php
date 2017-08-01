<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Av
 *
 * @ORM\Table(name="av")
 * @ORM\Entity
 */
class Av
{
    /**
     * @var string
     *
     * @ORM\Column(name="Equipment_Type", type="string", length=100, nullable=false)
     */
    private $equipmentType;

    /**
     * @var string
     *
     * @ORM\Column(name="Make", type="string", length=20, nullable=false)
     */
    private $make;

    /**
     * @var string
     *
     * @ORM\Column(name="Model", type="string", length=20, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="Serial_No", type="string", length=30, nullable=true)
     */
    private $serialNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Purchase_Date", type="date", nullable=false)
     */
    private $purchaseDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Supplier", type="string", length=20, nullable=false)
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="Location", type="string", length=200, nullable=true)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="PAT", type="integer", nullable=true)
     */
    private $pat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Last_Test", type="date", nullable=true)
     */
    private $lastTest;

    /**
     * @var string
     *
     * @ORM\Column(name="Tested_By", type="string", length=20, nullable=false)
     */
    private $testedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="Test_Type", type="string", length=20, nullable=false)
     */
    private $testType;

    /**
     * @var integer
     *
     * @ORM\Column(name="Test_Interval", type="integer", nullable=false)
     */
    private $testInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="Notes", type="string", length=300, nullable=false)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="PO_no", type="string", length=20, nullable=false)
     */
    private $poNo;

    /**
     * @var string
     *
     * @ORM\Column(name="AVS_Code", type="string", length=100, nullable=false)
     */
    private $avsCode;

    /**
     * @var string
     *
     * @ORM\Column(name="BLANK", type="string", length=20, nullable=true)
     */
    private $blank;

    /**
     * @var integer
     *
     * @ORM\Column(name="Equip_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $equipId;


}

