<?php

namespace App\src\Service;
use Doctrine\ORM\Mapping as ORM;

class pasInsulte
{
    public function pasInsultes($Contenu)
    {
        $mots = "#fdp|pd|^con$#i";
        if(!preg_match($mots, $Contenu)){
            echo $Contenu;
        }
        else {
            preg_remplace($mots, "#####", $contenu);
        }
        return $Contenu;
    }
}