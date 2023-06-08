<?php

class User {

    private int $id;
    private string $name;
    private string $email;
    private string $password;
	private string $picture;

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername(string $username) {
		$this->username = $username;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword(string $password) {
		$this->password = $password;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	/**
	 * Get the value of picture
	 */ 
	public function getPicture()
	{
		return $this->picture;
	}

	/**
	 * Set the value of picture
	 *
	 * @return  self
	 */ 
	public function setPicture(string $picture)
	{
		$this->picture = $picture;

		return $this;
	}
}