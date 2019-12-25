<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class RuntimeException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 * @see https://www.php.net/manual/ru/spl.exceptions.php
 */
class RuntimeException extends \RuntimeException
{
    use ExceptionFactoryTrait;
}
