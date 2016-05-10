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
}
