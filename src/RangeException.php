<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class RangeException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class RangeException extends \RangeException
{
    use ExceptionFactoryTrait;
}
