<?php

namespace App\src\Service;
use Doctrine\ORM\Mapping as ORM;

class pasInsulte
{
    public function pasInsultes()
    {
        $mots = "#fdp|pd|^con$#i";
        if(!preg_match($mots, $Contenu)){
            echo $Contenu;
        }
        else {
            echo '#####';
        }
    }
}