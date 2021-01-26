<?php

namespace App\Models;

class ModelSingleton
{
    private static $_instance = null;
    
    private $count;

    private function __construct() {
        $this->count = 0;
    }
    
  
    public static function getInstance() {
    
        if (is_null(self::$_instance)) {
            self::$_instance = new ModelSingleton(); 
        }
    
        return self::$_instance;
    }

    public function increment() {
        $this->count++;
        return $this->count;
    }
}