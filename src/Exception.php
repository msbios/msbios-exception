<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class Exception
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 * @see https://www.php.net/manual/ru/spl.exceptions.php
 */
class Exception extends \Exception
{
    use ExceptionFactoryTrait;
}
