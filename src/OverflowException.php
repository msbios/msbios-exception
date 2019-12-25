<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class OverflowException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class OverflowException extends \OverflowException
{
    use ExceptionFactoryTrait;
}
