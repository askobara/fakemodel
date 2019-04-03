<?php

namespace dmirogin\fakemodel\resolvers;

use yii\base\BaseObject;

/**
 * Resolve definitions for specified class
 */
abstract class BaseDefinitionResolver extends BaseObject implements Resolver
{
    /**
     * @var array
     */
    protected $definitions;

    /**
     * Set definitions data
     *
     * @param array $definitions
     * @return BaseDefinitionResolver For chaining
     */
    public function setDefinitions(array $definitions): self
    {
        $this->definitions = $definitions;

        return $this;
    }

}
