<?php

namespace AdminBundle\Entity;

/**
 * Emails
 */
class Emails
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $emails;

    /**
     * @var string
     */
    private $num;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set emails
     *
     * @param string $emails
     *
     * @return Emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Get emails
     *
     * @return string
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set num
     *
     * @param string $num
     *
     * @return Emails
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }
    /**
     * @var \AdminBundle\Entity\Users
     */
    private $userItem;


    /**
     * Set userItem
     *
     * @param \AdminBundle\Entity\Users $userItem
     *
     * @return Emails
     */
    public function setUserItem(\AdminBundle\Entity\Users $userItem)
    {
        $this->userItem = $userItem;

        return $this;
    }

    /**
     * Get userItem
     *
     * @return \AdminBundle\Entity\Users
     */
    public function getUserItem()
    {
        return $this->userItem;
    }
}
