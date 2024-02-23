<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'HtmlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'MarkdownConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'IntlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'CssinlinerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'InkyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TwigExtra'.\DIRECTORY_SEPARATOR.'StringConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwigExtraConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $cache;
    private $html;
    private $markdown;
    private $intl;
    private $cssinliner;
    private $inky;
    private $string;
    private $_usedProperties = [];

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\CacheConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\CacheConfig : static)
     */
    public function cache(array $value = []): \Symfony\Config\TwigExtra\CacheConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value;

            return $this;
        }

        if (!$this->cache instanceof \Symfony\Config\TwigExtra\CacheConfig) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\TwigExtra\CacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }

        return $this->cache;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\HtmlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\HtmlConfig : static)
     */
    public function html(array $value = []): \Symfony\Config\TwigExtra\HtmlConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['html'] = true;
            $this->html = $value;

            return $this;
        }

        if (!$this->html instanceof \Symfony\Config\TwigExtra\HtmlConfig) {
            $this->_usedProperties['html'] = true;
            $this->html = new \Symfony\Config\TwigExtra\HtmlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "html()" has already been initialized. You cannot pass values the second time you call html().');
        }

        return $this->html;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\MarkdownConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\MarkdownConfig : static)
     */
    public function markdown(array $value = []): \Symfony\Config\TwigExtra\MarkdownConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = $value;

            return $this;
        }

        if (!$this->markdown instanceof \Symfony\Config\TwigExtra\MarkdownConfig) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = new \Symfony\Config\TwigExtra\MarkdownConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "markdown()" has already been initialized. You cannot pass values the second time you call markdown().');
        }

        return $this->markdown;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\IntlConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\IntlConfig : static)
     */
    public function intl(array $value = []): \Symfony\Config\TwigExtra\IntlConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['intl'] = true;
            $this->intl = $value;

            return $this;
        }

        if (!$this->intl instanceof \Symfony\Config\TwigExtra\IntlConfig) {
            $this->_usedProperties['intl'] = true;
            $this->intl = new \Symfony\Config\TwigExtra\IntlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "intl()" has already been initialized. You cannot pass values the second time you call intl().');
        }

        return $this->intl;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\CssinlinerConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\CssinlinerConfig : static)
     */
    public function cssinliner(array $value = []): \Symfony\Config\TwigExtra\CssinlinerConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = $value;

            return $this;
        }

        if (!$this->cssinliner instanceof \Symfony\Config\TwigExtra\CssinlinerConfig) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = new \Symfony\Config\TwigExtra\CssinlinerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cssinliner()" has already been initialized. You cannot pass values the second time you call cssinliner().');
        }

        return $this->cssinliner;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\InkyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\InkyConfig : static)
     */
    public function inky(array $value = []): \Symfony\Config\TwigExtra\InkyConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['inky'] = true;
            $this->inky = $value;

            return $this;
        }

        if (!$this->inky instanceof \Symfony\Config\TwigExtra\InkyConfig) {
            $this->_usedProperties['inky'] = true;
            $this->inky = new \Symfony\Config\TwigExtra\InkyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "inky()" has already been initialized. You cannot pass values the second time you call inky().');
        }

        return $this->inky;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\TwigExtra\StringConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\TwigExtra\StringConfig : static)
     */
    public function string(array $value = []): \Symfony\Config\TwigExtra\StringConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['string'] = true;
            $this->string = $value;

            return $this;
        }

        if (!$this->string instanceof \Symfony\Config\TwigExtra\StringConfig) {
            $this->_usedProperties['string'] = true;
            $this->string = new \Symfony\Config\TwigExtra\StringConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "string()" has already been initialized. You cannot pass values the second time you call string().');
        }

        return $this->string;
    }

    public function getExtensionAlias(): string
    {
        return 'twig_extra';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = \is_array($value['cache']) ? new \Symfony\Config\TwigExtra\CacheConfig($value['cache']) : $value['cache'];
            unset($value['cache']);
        }

        if (array_key_exists('html', $value)) {
            $this->_usedProperties['html'] = true;
            $this->html = \is_array($value['html']) ? new \Symfony\Config\TwigExtra\HtmlConfig($value['html']) : $value['html'];
            unset($value['html']);
        }

        if (array_key_exists('markdown', $value)) {
            $this->_usedProperties['markdown'] = true;
            $this->markdown = \is_array($value['markdown']) ? new \Symfony\Config\TwigExtra\MarkdownConfig($value['markdown']) : $value['markdown'];
            unset($value['markdown']);
        }

        if (array_key_exists('intl', $value)) {
            $this->_usedProperties['intl'] = true;
            $this->intl = \is_array($value['intl']) ? new \Symfony\Config\TwigExtra\IntlConfig($value['intl']) : $value['intl'];
            unset($value['intl']);
        }

        if (array_key_exists('cssinliner', $value)) {
            $this->_usedProperties['cssinliner'] = true;
            $this->cssinliner = \is_array($value['cssinliner']) ? new \Symfony\Config\TwigExtra\CssinlinerConfig($value['cssinliner']) : $value['cssinliner'];
            unset($value['cssinliner']);
        }

        if (array_key_exists('inky', $value)) {
            $this->_usedProperties['inky'] = true;
            $this->inky = \is_array($value['inky']) ? new \Symfony\Config\TwigExtra\InkyConfig($value['inky']) : $value['inky'];
            unset($value['inky']);
        }

        if (array_key_exists('string', $value)) {
            $this->_usedProperties['string'] = true;
            $this->string = \is_array($value['string']) ? new \Symfony\Config\TwigExtra\StringConfig($value['string']) : $value['string'];
            unset($value['string']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache instanceof \Symfony\Config\TwigExtra\CacheConfig ? $this->cache->toArray() : $this->cache;
        }
        if (isset($this->_usedProperties['html'])) {
            $output['html'] = $this->html instanceof \Symfony\Config\TwigExtra\HtmlConfig ? $this->html->toArray() : $this->html;
        }
        if (isset($this->_usedProperties['markdown'])) {
            $output['markdown'] = $this->markdown instanceof \Symfony\Config\TwigExtra\MarkdownConfig ? $this->markdown->toArray() : $this->markdown;
        }
        if (isset($this->_usedProperties['intl'])) {
            $output['intl'] = $this->intl instanceof \Symfony\Config\TwigExtra\IntlConfig ? $this->intl->toArray() : $this->intl;
        }
        if (isset($this->_usedProperties['cssinliner'])) {
            $output['cssinliner'] = $this->cssinliner instanceof \Symfony\Config\TwigExtra\CssinlinerConfig ? $this->cssinliner->toArray() : $this->cssinliner;
        }
        if (isset($this->_usedProperties['inky'])) {
            $output['inky'] = $this->inky instanceof \Symfony\Config\TwigExtra\InkyConfig ? $this->inky->toArray() : $this->inky;
        }
        if (isset($this->_usedProperties['string'])) {
            $output['string'] = $this->string instanceof \Symfony\Config\TwigExtra\StringConfig ? $this->string->toArray() : $this->string;
        }

        return $output;
    }

}
