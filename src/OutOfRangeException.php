<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class OutOfRangeException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class OutOfRangeException extends \OutOfRangeException
{
    use ExceptionFactoryTrait;
}
