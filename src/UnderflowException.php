<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class UnderflowException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class UnderflowException extends \UnderflowException
{
    use ExceptionFactoryTrait;
}
