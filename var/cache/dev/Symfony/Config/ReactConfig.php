<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ReactConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $controllersPath;
    private $nameGlob;
    private $_usedProperties = [];

    /**
     * The path to the directory where React controller components are stored - relevant only when using symfony/asset-mapper.
     * @default '%kernel.project_dir%/assets/react/controllers'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controllersPath($value): static
    {
        $this->_usedProperties['controllersPath'] = true;
        $this->controllersPath = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function nameGlob(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['nameGlob'] = true;
        $this->nameGlob = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'react';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('controllers_path', $value)) {
            $this->_usedProperties['controllersPath'] = true;
            $this->controllersPath = $value['controllers_path'];
            unset($value['controllers_path']);
        }

        if (array_key_exists('name_glob', $value)) {
            $this->_usedProperties['nameGlob'] = true;
            $this->nameGlob = $value['name_glob'];
            unset($value['name_glob']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['controllersPath'])) {
            $output['controllers_path'] = $this->controllersPath;
        }
        if (isset($this->_usedProperties['nameGlob'])) {
            $output['name_glob'] = $this->nameGlob;
        }

        return $output;
    }

}
