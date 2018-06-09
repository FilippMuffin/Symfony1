<?php
/**
 * Created by PhpStorm.
 * User: mihfil
 * Date: 05.06.18
 * Time: 17:32
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Student
 * @package AppBundle\Entity
 * @ORM\Entity()
 */

class Student
{
    /**
     * @var integer
     * @ORM\Column(type = "integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type = "string")
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type = "string")
     */
    protected $sername;

    /**
     * @var string
     * @ORM\Column(type = "string")
     */
    protected $age;

    public  function __construct( $name, $sername, $age)
    {
        $this->name = $name;
        $this->sername = $sername;
        $this->age = $age;

    }

    public function __toString()
    {
        return $this->name.', '.$this->sername.', '.$this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSername()
    {
        return $this->sername;
    }

    /**
     * @param mixed $sername
     */
    public function setSername($sername)
    {
        $this->sername = $sername;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


}