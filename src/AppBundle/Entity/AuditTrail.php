<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuditTrail
 *
 * @ORM\Table(name="audit_trail")
 * @ORM\Entity
 */
class AuditTrail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="from_location_id", type="integer", nullable=false)
     */
    private $fromLocationId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="to_location_id", type="integer", nullable=false)
     */
    private $toLocationId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="old_owner_id", type="integer", nullable=false)
     */
    private $oldOwnerId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="new_owner_id", type="integer", nullable=false)
     */
    private $newOwnerId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="old_status_id", type="integer", nullable=true)
     */
    private $oldStatusId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="new_status_id", type="integer", nullable=true)
     */
    private $newStatusId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="updated", type="integer", nullable=true)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="updateby", type="string", length=32, nullable=false)
     */
    private $updateby = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getFromLocationId()
    {
        return $this->fromLocationId;
    }

    /**
     * @param int $fromLocationId
     */
    public function setFromLocationId($fromLocationId)
    {
        $this->fromLocationId = $fromLocationId;
    }

    /**
     * @return int
     */
    public function getToLocationId()
    {
        return $this->toLocationId;
    }

    /**
     * @param int $toLocationId
     */
    public function setToLocationId($toLocationId)
    {
        $this->toLocationId = $toLocationId;
    }

    /**
     * @return int
     */
    public function getOldOwnerId()
    {
        return $this->oldOwnerId;
    }

    /**
     * @param int $oldOwnerId
     */
    public function setOldOwnerId($oldOwnerId)
    {
        $this->oldOwnerId = $oldOwnerId;
    }

    /**
     * @return int
     */
    public function getNewOwnerId()
    {
        return $this->newOwnerId;
    }

    /**
     * @param int $newOwnerId
     */
    public function setNewOwnerId($newOwnerId)
    {
        $this->newOwnerId = $newOwnerId;
    }

    /**
     * @return int
     */
    public function getOldStatusId()
    {
        return $this->oldStatusId;
    }

    /**
     * @param int $oldStatusId
     */
    public function setOldStatusId($oldStatusId)
    {
        $this->oldStatusId = $oldStatusId;
    }

    /**
     * @return int
     */
    public function getNewStatusId()
    {
        return $this->newStatusId;
    }

    /**
     * @param int $newStatusId
     */
    public function setNewStatusId($newStatusId)
    {
        $this->newStatusId = $newStatusId;
    }

    /**
     * @return int
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param int $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return string
     */
    public function getUpdateby()
    {
        return $this->updateby;
    }

    /**
     * @param string $updateby
     */
    public function setUpdateby($updateby)
    {
        $this->updateby = $updateby;
    }


}

