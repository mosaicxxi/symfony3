<?php

namespace AdminBundle\Entity;

/**
 * Users
 */
class Users
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $fIO;

    /**
     * @var \DateTime
     */
    private $dtCreate;


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
     * Set login
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Users
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set fIO
     *
     * @param string $fIO
     *
     * @return Users
     */
    public function setFIO($fIO)
    {
        $this->fIO = $fIO;

        return $this;
    }

    /**
     * Get fIO
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->fIO;
    }

    /**
     * Set dtCreate
     *
     * @param \DateTime $dtCreate
     *
     * @return Users
     */
    public function setDtCreate($dtCreate)
    {
        $this->dtCreate = $dtCreate;

        return $this;
    }

    /**
     * Get dtCreate
     *
     * @return \DateTime
     */
    public function getDtCreate()
    {
        return $this->dtCreate;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $emailsItem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->emailsItem = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add emailsItem
     *
     * @param \AdminBundle\Entity\Emails $emailsItem
     *
     * @return Users
     */
    public function addEmailsItem(\AdminBundle\Entity\Emails $emailsItem)
    {
        $this->emailsItem[] = $emailsItem;

        return $this;
    }

    /**
     * Remove emailsItem
     *
     * @param \AdminBundle\Entity\Emails $emailsItem
     */
    public function removeEmailsItem(\AdminBundle\Entity\Emails $emailsItem)
    {
        $this->emailsItem->removeElement($emailsItem);
    }

    /**
     * Get emailsItem
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmailsItem()
    {
        return $this->emailsItem;
    }
}
