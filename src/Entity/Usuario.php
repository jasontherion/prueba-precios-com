<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $nombre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellidos", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $apellidos = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateRegister", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateregister = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateUpdate", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateupdate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="userAgent", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $useragent = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="idCountry", type="string", length=50, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $idcountry = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="keyEvent", type="string", length=50, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $keyevent = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(?string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getDateregister(): ?\DateTimeInterface
    {
        return $this->dateregister;
    }

    public function setDateregister(?\DateTimeInterface $dateregister): self
    {
        $this->dateregister = $dateregister;

        return $this;
    }

    public function getDateupdate(): ?\DateTimeInterface
    {
        return $this->dateupdate;
    }

    public function setDateupdate(?\DateTimeInterface $dateupdate): self
    {
        $this->dateupdate = $dateupdate;

        return $this;
    }

    public function getUseragent(): ?string
    {
        return $this->useragent;
    }

    public function setUseragent(?string $useragent): self
    {
        $this->useragent = $useragent;

        return $this;
    }

    public function getIdcountry(): ?string
    {
        return $this->idcountry;
    }

    public function setIdcountry(?string $idcountry): self
    {
        $this->idcountry = $idcountry;

        return $this;
    }

    public function getKeyevent(): ?string
    {
        return $this->keyevent;
    }

    public function setKeyevent(?string $keyevent): self
    {
        $this->keyevent = $keyevent;

        return $this;
    }


}
