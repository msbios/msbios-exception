<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Class DomainException
 *
 * @inheritdoc
 *
 * @package MSBios\Exception
 */
class DomainException extends \DomainException
{
    use ExceptionFactoryTrait;
}
