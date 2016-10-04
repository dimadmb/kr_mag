<?php

namespace CruiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Motorship
 *
 * @ORM\Table(name="motorship")
 * @ORM\Entity(repositoryClass="CruiseBundle\Repository\MotorshipRepository")
 */
class Motorship
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="class", type="integer")
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

	/**
	* @ORM\ManyToOne(targetEntity="Region", inversedBy="motorship")
	*/
    private $region; // присоединить 

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var float
     *
     * @ORM\Column(name="priority", type="float")
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="text")
     */
    private $properties;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="operator_1s_code", type="string", length=64)
     */
    private $operator1sCode;

    /**
     * @var string
     *
     * @ORM\Column(name="parameter", type="string", length=255)
     */
    private $parameter;

    /**
     * @var string
     *
     * @ORM\Column(name="rooms_description", type="string", length=255)
     */
    private $roomsDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="manager", type="string", length=255)
     */
    private $manager;
	
	
	/**
	* @ORM\OneToMany(targetEntity="Cruise", mappedBy="motorship")
	*/
	private $cruise;

	public function __construct()
	{
		$cruise = new ArrayCollection();
	}

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
     * Set name
     *
     * @param string $name
     *
     * @return Motorship
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Motorship
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set class
     *
     * @param integer $class
     *
     * @return Motorship
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return int
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Motorship
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set region
     *
     * @param integer $region
     *
     * @return Motorship
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return int
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Motorship
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Motorship
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set priority
     *
     * @param float $priority
     *
     * @return Motorship
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Motorship
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set properties
     *
     * @param string $properties
     *
     * @return Motorship
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * Get properties
     *
     * @return string
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Motorship
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set operator1sCode
     *
     * @param string $operator1sCode
     *
     * @return Motorship
     */
    public function setOperator1sCode($operator1sCode)
    {
        $this->operator1sCode = $operator1sCode;

        return $this;
    }

    /**
     * Get operator1sCode
     *
     * @return string
     */
    public function getOperator1sCode()
    {
        return $this->operator1sCode;
    }

    /**
     * Set parameter
     *
     * @param string $parameter
     *
     * @return Motorship
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Get parameter
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set roomsDescription
     *
     * @param string $roomsDescription
     *
     * @return Motorship
     */
    public function setRoomsDescription($roomsDescription)
    {
        $this->roomsDescription = $roomsDescription;

        return $this;
    }

    /**
     * Get roomsDescription
     *
     * @return string
     */
    public function getRoomsDescription()
    {
        return $this->roomsDescription;
    }

    /**
     * Set manager
     *
     * @param string $manager
     *
     * @return Motorship
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Add cruise
     *
     * @param \CruiseBundle\Entity\Cruise $cruise
     *
     * @return Motorship
     */
    public function addCruise(\CruiseBundle\Entity\Cruise $cruise)
    {
        $this->cruise[] = $cruise;

        return $this;
    }

    /**
     * Remove cruise
     *
     * @param \CruiseBundle\Entity\Cruise $cruise
     */
    public function removeCruise(\CruiseBundle\Entity\Cruise $cruise)
    {
        $this->cruise->removeElement($cruise);
    }

    /**
     * Get cruise
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCruise()
    {
        return $this->cruise;
    }
}
