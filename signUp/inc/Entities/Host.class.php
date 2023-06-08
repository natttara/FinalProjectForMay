<?php

class Host {
    private int $host_id;
    private string $host_name;
    private int $id_accommodation;
    private string $email;
    private string $password;
    

    /**
     * Get the value of host_id
     */ 
    public function getHost_id()
    {
        return $this->host_id;
    }

    /**
     * Set the value of host_id
     *
     * @return  self
     */ 
    public function setHost_id($host_id)
    {
        $this->host_id = $host_id;

        return $this;
    }

    /**
     * Get the value of host_name
     */ 
    public function getHost_name()
    {
        return $this->host_name;
    }

    /**
     * Set the value of host_name
     *
     * @return  self
     */ 
    public function setHost_name($host_name)
    {
        $this->host_name = $host_name;

        return $this;
    }

    /**
     * Get the value of id_accommodation
     */ 
    public function getId_accommodation()
    {
        return $this->id_accommodation;
    }

    /**
     * Set the value of id_accommodation
     *
     * @return  self
     */ 
    public function setId_accommodation($id_accommodation)
    {
        $this->id_accommodation = $id_accommodation;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}