<?php

namespace ErpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class TrialProtocolFile
{

    /**
     * @ORM\ManyToOne(targetEntity="ErpBundle\Entity\Trial")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trial;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    // ..... other fields

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="trialprotocol_protocol", fileNameProperty="protocolName", size="protocolSize")
     *
     * @var File
     */
    private $protocolFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $protocolName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $protocolSize;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $protocol
     *
     * @return Trialprotocol
     */
    public function setProtocolFile(File $protocol = null)
    {
        $this->protocolFile = $protocol;

        if ($protocol) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getProtocolFile()
    {
        return $this->protocolFile;
    }

    /**
     * @param string $protocolName
     *
     * @return Trialprotocol
     */
    public function setProtocolName($protocolName)
    {
        $this->protocolName = $protocolName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProtocolName()
    {
        return $this->protocolName;
    }

    /**
     * @param integer $protocolSize
     *
     * @return Trialprotocol
     */
    public function setProtocolSize($protocolSize)
    {
        $this->protocolSize = $protocolSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getProtocolSize()
    {
        return $this->protocolSize;
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

/*    public function setId($id)
    {
        $this->trial = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }*/

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
