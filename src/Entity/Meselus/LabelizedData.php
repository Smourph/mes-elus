<?php

namespace App\Entity\Meselus;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class LabelizedData.
 *
 * @ORM\MappedSuperclass
 */
abstract class LabelizedData
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     *
     * @return LabelizedData
     */
    public function setLabel(?string $label): LabelizedData
    {
        $this->label = $label;

        return $this;
    }

    public function __toString()
    {
        return $this->getLabel() ?: '';
    }
}