<?php

namespace ZfcUserDoctrineORM\Options;

use ZfcUser\Options\ModuleOptions as BaseModuleOptions;

class ModuleOptions extends BaseModuleOptions
{
    /**
     * @var string
     */
    protected $userEntityClass = 'ZfcUserDoctrineORM\Entity\User';

    /**
     * @var bool
     */
    protected $enableDefaultEntities = true;

    /**
     * @param boolean $enableDefaultEntities
     * @return self
     */
    public function setEnableDefaultEntities($enableDefaultEntities)
    {
        $this->enableDefaultEntities = $enableDefaultEntities;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableDefaultEntities()
    {
        return $this->enableDefaultEntities;
    }
}
