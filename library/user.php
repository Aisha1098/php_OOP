<?php

class User{
    public $user_id;

    public function __construct($user_id){
        $this->user_id = $user_id;
    }

    public function user_id(){
        return $this->user_id;
    }


}
