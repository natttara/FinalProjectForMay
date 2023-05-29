<?php

class Accommodation {
    private int $id_accommodation;
    private string $name;
    private string $neighbourhood;
    private string $ROOM_TYPE;
    private float $PRICE_PER_NIGHT;
    private int $MAX_GUESTS;
    private string $IS_AVAILABLE;

    public function __construct(
        int $id_accommodation,
        string $name,
        string $neighbourhood,
        string $ROOM_TYPE,
        float $PRICE_PER_NIGHT,
        int $MAX_GUESTS,
        string $IS_AVAILABLE
    ) {
        $this->id_accommodation = $id_accommodation;
        $this->name = $name;
        $this->neighbourhood = $neighbourhood;
        $this->ROOM_TYPE = $ROOM_TYPE;
        $this->PRICE_PER_NIGHT = $PRICE_PER_NIGHT;
        $this->MAX_GUESTS = $MAX_GUESTS;
        $this->IS_AVAILABLE = $IS_AVAILABLE;
    }

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
		return $this->ROOM_TYPE;
	}

	public function setType(int $ROOM_TYPE) {
		$this->ROOM_TYPE = $ROOM_TYPE;
	}

	public function getPrice() {
		return $this->PRICE_PER_NIGHT;
	}

	public function setPrice(float $PRICE_PER_NIGHT) {
		$this->PRICE_PER_NIGHT = $PRICE_PER_NIGHT;
	}

	public function getGuests() {
		return $this->MAX_GUESTS;
	}

	public function setGuests(string $MAX_GUESTS) {
		$this->MAX_GUESTS = $MAX_GUESTS;
	}

	public function getAvailability() {
		return $this->IS_AVAILABLE;
	}

	public function setAvailability(string $IS_AVAILABLE) {
		$this->IS_AVAILABLE = $IS_AVAILABLE;
	}

}