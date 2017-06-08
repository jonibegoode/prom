<?php

namespace ErpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrialDiscussionT
 *
 * @ORM\Table(name="trial_discussion_t")
 * @ORM\Entity(repositoryClass="ErpBundle\Repository\TrialDiscussionTRepository")
 */
class TrialDiscussionT
{
    /**
     * @ORM\ManyToOne(targetEntity="ErpBundle\Entity\Trial")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trial;

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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set author
     *
     * @param string $author
     *
     * @return TrialDiscussionT
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return TrialDiscussionT
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TrialDiscussionT
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function setTrial(Trial $trial)
    {
        $this->trial = $trial;
        return $this;
    }

    public function getTrial()
    {
        return $this->trial;
    }
}
