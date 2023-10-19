<?php
class SubeArchivos {

   
    function __construct() {
       
    }
   
   
    function createFolder(string $name) {
        $created = false;
        if (!is_dir($name)) {
            mkdir($name);
            $created = true;
        }
        return $created;
    }

    

    
    function set($name, $target) {
        $number = 1;
        $created = $this->createFolder($target);
        $uploaded = $this->upload($name, $target);
        if(!$uploaded) {
            if($created){
               rmdir($target); //borrar carpetas, directorios
            }
            $number = 0;
        }
        return $number;
    }

    function upload(string $name, string $target) {
        if(isset($_FILES[$name]) &&
            $_FILES[$name]['error'] == 0 ) {
                $fileName = $_FILES[$name]['name'];
                return move_uploaded_file($_FILES[$name]['tmp_name'], $target . '/' . $fileName);
                 
        }
        return false;
    }

}