<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class LogicException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class LogicException extends \LogicException
{
    use ExceptionFactoryTrait;
}
