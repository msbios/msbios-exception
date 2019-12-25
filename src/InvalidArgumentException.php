<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class InvalidArgumentException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class InvalidArgumentException extends \InvalidArgumentException
{
    use ExceptionFactoryTrait;
}
