<?php

namespace ErpBundle\Directorynamers;


use Vich\UploaderBundle\Naming\DirectoryNamerInterface;
use Vich\UploaderBundle\Mapping\PropertyMapping;

class DirectoryNamer implements DirectoryNamerInterface
{

    public function directoryName($obj, PropertyMapping $mapping)
    {
        $id = $obj->getTrials()->getId();
        return $id;
    }
}