<?php


namespace ErpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @UniqueEntity(fields={"trials"}, message="Only one ARM file is allowed")
 */
class TrialArmFile
{

    /**
     * @ORM\OneToOne(targetEntity="ErpBundle\Entity\Trials")
     * @ORM\JoinColumn(nullable=false)
     */
    private $trials;

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
     * @Vich\UploadableField(mapping="trialarm_arm", fileNameProperty="armName", size="armSize")
     *
     * @var File
     */
    private $armFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $armName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $armSize;

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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $arm
     *
     * @return Trialarm
     */
    public function setArmFile(File $arm = null)
    {
        $this->armFile = $arm;

        if ($arm) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getArmFile()
    {
        return $this->armFile;
    }

    /**
     * @param string $armName
     *
     * @return Trialarm
     */
    public function setArmName($armName)
    {
        $this->armName = $armName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArmName()
    {
        return $this->armName;
    }

    /**
     * @param integer $armSize
     *
     * @return Trialarm
     */
    public function setArmSize($armSize)
    {
        $this->armSize = $armSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getArmSize()
    {
        return $this->armSize;
    }

    public function setTrials(Trials $trials)
    {
        $this->trials = $trials;
        return $this;
    }

    public function getTrials()
    {
        return $this->trials;
    }

    public function setId($id)
    {
        $this->trials = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}