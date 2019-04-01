<?php

class picture
{
    private $event;
    private $schemaa;
    
    function __construct($event,$schemaa)
    {
        $this->event=$event;
        $this->schemaa=$schemaa;
    }

    function getevent() {return $this->event ;}
    function getschemaa() {return $this->schemaa ;}
    function setevent($event){
        $this->event=$event;
    }
}

?>