<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class BadMethodCallException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class BadMethodCallException extends \BadMethodCallException
{
    use ExceptionFactoryTrait;
}
