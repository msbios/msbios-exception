<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class LengthException
 *
 * @inheritdoc
 *
 * @inheritdoc@package MSBios\Exception
 */
class LengthException extends \LengthException
{
    use ExceptionFactoryTrait;
}
