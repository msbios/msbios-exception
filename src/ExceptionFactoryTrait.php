<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace MSBios\Exception;

/**
 * Trait ExceptionFactoryTrait
 *
 * @package MSBios\Exception
 */
trait ExceptionFactoryTrait
{
    /**
     * @param string $message
     *
     * @return \Throwable
     */
    protected static function create(string $message): \Throwable
    {
        return new static($message);
    }
}
