<?php

class Accommodation {
    private int $id_accommodation;
    private string $name;
    private string $neighbourhood;
    private string $room_type;
    private float $price;
    private string $max_guests;
    private string $IS_AVAILABLE;

    public function getId() {
		return $this->id_accommodation;
	}

	public function setId(int $id) {
		$this->id_accommodation = $id;
	}

	public function getName() {
		return $this->name;
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
		return $this->price;
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

}