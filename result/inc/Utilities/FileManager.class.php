<?php

class FileManager {

    public static function readCsvFile( string $filePath ) : string {
        $fileContent = "";
        try {
            $fileHandle = fopen( $filePath, "r");
            if ( ! $fileHandle) {
                throw new Exception("File cannot be read. Please, select another one. $file");
            }

            //A full string from the file. Unique string
            $fileContent = fread($fileHandle, filesize($filePath));

            fclose($fileHandle);

        } catch (Exception $error) {
            echo $error->getMessage();
        }

        return $fileContent;
    }

    public static function writeCsvFile( string $filePath, string $fileContent ) :void {
        try {

            $fileHandle = fopen($filePath,"a+");
            if ( ! $fileHandle) {
                throw new Exception("File $file cannot be found. Please, select another file.");
            }

            fwrite($fileHandle,$fileContent);
            fclose($fileHandle);

        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
}