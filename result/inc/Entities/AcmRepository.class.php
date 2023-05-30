<?php

class AcmRepository {
    private $acmList;

    
    public function setAcmList( array $newList) : void{
        $this->acmList = $newList;
    }

    public function getAcmList() : array {
        return $this->acmList;
    }

    // public function includeNewCar($newCar) {
    //     $this->carList[] = $newCar;
    // }

    public function getTotalAcm() : int {
        return count($this->acmList);
    }

    public static function sortByPrice($acm1, $acm2){
        return $acm1->PRICE_PER_NIGHT <=> $acm2->PRICE_PER_NIGHT;
    }
    
    public static function sortByPriceDesc($acm1, $acm2){
        return $acm2->PRICE_PER_NIGHT <=> $acm1->PRICE_PER_NIGHT;
    }

    public function sortAcm( string $sortBy ) : void {

        switch($sortBy) {
            case "price":
                usort($this->acmList,'self::sortByPrice');
            break;
            case "priceDesc":
                usort($this->acmList,'self::sortByPriceDesc');
            break;
            case "name":
                usort($this->acmList,'self::sortByName');
            break;
        }
    }
}