<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class BadFunctionCallException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class BadFunctionCallException extends \BadFunctionCallException
{
    use ExceptionFactoryTrait;
}
