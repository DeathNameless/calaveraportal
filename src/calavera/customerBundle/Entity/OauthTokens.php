<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthTokens
 *
 * @ORM\Table(name="oauth_tokens")
 * @ORM\Entity
 */
class OauthTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=32, nullable=true)
     */
    private $secret;

    /**
     * @var string
     *
     * @ORM\Column(name="tstate", type="string", length=1, nullable=true)
     */
    private $tstate;

    /**
     * @var string
     *
     * @ORM\Column(name="consumer", type="string", length=36, nullable=false)
     */
    private $consumer;

    /**
     * @var integer
     *
     * @ORM\Column(name="token_ts", type="bigint", nullable=true)
     */
    private $tokenTs;

    /**
     * @var string
     *
     * @ORM\Column(name="verify", type="string", length=32, nullable=true)
     */
    private $verify;

    /**
     * @var string
     *
     * @ORM\Column(name="callback_url", type="string", length=255, nullable=true)
     */
    private $callbackUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;



    /**
     * Set secret
     *
     * @param string $secret
     * @return OauthTokens
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    
        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set tstate
     *
     * @param string $tstate
     * @return OauthTokens
     */
    public function setTstate($tstate)
    {
        $this->tstate = $tstate;
    
        return $this;
    }

    /**
     * Get tstate
     *
     * @return string 
     */
    public function getTstate()
    {
        return $this->tstate;
    }

    /**
     * Set consumer
     *
     * @param string $consumer
     * @return OauthTokens
     */
    public function setConsumer($consumer)
    {
        $this->consumer = $consumer;
    
        return $this;
    }

    /**
     * Get consumer
     *
     * @return string 
     */
    public function getConsumer()
    {
        return $this->consumer;
    }

    /**
     * Set tokenTs
     *
     * @param integer $tokenTs
     * @return OauthTokens
     */
    public function setTokenTs($tokenTs)
    {
        $this->tokenTs = $tokenTs;
    
        return $this;
    }

    /**
     * Get tokenTs
     *
     * @return integer 
     */
    public function getTokenTs()
    {
        return $this->tokenTs;
    }

    /**
     * Set verify
     *
     * @param string $verify
     * @return OauthTokens
     */
    public function setVerify($verify)
    {
        $this->verify = $verify;
    
        return $this;
    }

    /**
     * Get verify
     *
     * @return string 
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Set callbackUrl
     *
     * @param string $callbackUrl
     * @return OauthTokens
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    
        return $this;
    }

    /**
     * Get callbackUrl
     *
     * @return string 
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return OauthTokens
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;
    
        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string 
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return OauthTokens
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return OauthTokens
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}