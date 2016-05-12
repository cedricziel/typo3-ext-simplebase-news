<?php

namespace CedricZiel\SimplebaseNews\Entity;

use CedricZiel\Simplebase\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @package CedricZiel\SimplebaseNews\Entity
 * @ORM\Entity(repositoryClass="CedricZiel\SimplebaseNews\Repository\NewsRepository")
 * @ORM\Table("tt_content")
 */
class News extends AbstractEntity
{
    /**
     * @ORM\Column("header")
     * @var string
     */
    protected $header;

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }
}
