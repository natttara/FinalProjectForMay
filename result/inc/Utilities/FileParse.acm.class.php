<?php

class FileParse {

    public static function parseFromStringToAcm( string $acmListString){
        $acmList = [];
        try {
            if ( ! is_string($acmListString) ) {
                throw new Exception("This is not a string type");
            } else {
                $fileRow = explode("\n",$acmListString);
                for($i = 1; $i < count($fileRow); $i++) {
                    $acm = explode(",",$fileRow[$i]);

                    if ( count($acm) === 7 ) {
                        $acmList[] = new Accommodation(
                            $acm[0],
                            $acm[1],
                            $acm[2],
                            $acm[3],
                            $acm[4],
                            $acm[5],
                            $acm[6]
                        );
                    }
                }
                
            }
        } catch(Exception $error) {
            echo $error->getMessage();
        }

        return $acmList;
    }
}