<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class OutOfBoundsException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class OutOfBoundsException extends \OutOfBoundsException
{
    use ExceptionFactoryTrait;
}
