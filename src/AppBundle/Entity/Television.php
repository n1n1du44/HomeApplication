<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class Television extends Thing
{
    /** @ORM\Column(type="string") */
    private $urlBase;

    /** @ORM\Column(type="string") */
    private $remoteKey;

    /** @ORM\Column(type="string") */
    private $urlGlobal;

    public function __construct($urlBase, $remoteKey) {
      $this->urlBase = $urlBase;
      $this->remoteKey = $remoteKey;

      // on met à jour l'url globale pour éviter de la calculer à chaque fois
    	$this->updateUrlGlobal();
    }

    private function updateUrlGlobal() {
    	$this->urlGlobal = "$this->urlBase/pub/remote_control?code=$this->remoteKey";
    }



    /**
     * Get the value of Url Base
     *
     * @return mixed
     */
    public function getUrlBase()
    {
        return $this->urlBase;
    }

    /**
     * Set the value of Url Base
     *
     * @param mixed urlBase
     *
     * @return self
     */
    public function setUrlBase($urlBase)
    {
        $this->urlBase = $urlBase;

        return $this;
    }

    /**
     * Get the value of Remote Key
     *
     * @return mixed
     */
    public function getRemoteKey()
    {
        return $this->remoteKey;
    }

    /**
     * Set the value of Remote Key
     *
     * @param mixed remoteKey
     *
     * @return self
     */
    public function setRemoteKey($remoteKey)
    {
        $this->remoteKey = $remoteKey;

        return $this;
    }

    /**
     * Get the value of Url Global
     *
     * @return mixed
     */
    public function getUrlGlobal()
    {
        return $this->urlGlobal;
    }

    /**
     * Set the value of Url Global
     *
     * @param mixed urlGlobal
     *
     * @return self
     */
    public function setUrlGlobal($urlGlobal)
    {
        $this->urlGlobal = $urlGlobal;

        return $this;
    }

}
