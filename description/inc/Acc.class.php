<?php

class Accommodation {
    private int $id_accommodation;
    private string $name;
    private string $neighbourhood;
    private string $room_type;
    private string $picture;
    private string $description;
    private float $price_per_night;
    private float $special_offer;
    private string $max_guests;
    private string $reviewer_name;
    private string $host_picture;
    private string $host_name;
    private string $IS_AVAILABLE;

    public function getId() {
		return $this->id_accommodation;
	}

	public function setId(int $id) {
		$this->id_accommodation = $id;
	}

	public  function getName() {
		return $this->name;
	}
	public  function getDescription() {
		return $this->description;
	}
	public  function getPicture() {
		return $this->picture;
	}
	public  function getSpecial() {
		return $this->special_offer;
	}
	public  function getReviewer() {
		return $this->reviewer_name;
	}


	public function setName(string $name) {
		$this->name = $name;
	}

	public function getNeighbourhood() {
		return $this->neighbourhood;
	}

	public function setNeighbourhood(string $neighbourhood) {
		$this->neighbourhood = $neighbourhood;
	}

	public function getType() {
		return $this->room_type;
	}

	public function setType(int $room_type) {
		$this->room_type = $room_type;
	}

	public function getPrice() {
		return $this->price_per_night;
	}
	public function getReview() {
		return $this->reviews;
	}

	public function setPrice(float $price) {
		$this->price = $price;
	}

	public function getGuests() {
		return $this->max_guests;
	}

	public function setGuests(string $max_guests) {
		$this->max_guests = $max_guests;
	}

	public function getAvailability() {
		return $this->IS_AVAILABLE;
	}

	public function setAvailability(string $IS_AVAILABLE) {
		$this->IS_AVAILABLE = $IS_AVAILABLE;
	}
	public  function getHostPicture() {
		return $this->host_picture;
	}
	public  function getHostName() {
		return $this->host_name;
	}

}