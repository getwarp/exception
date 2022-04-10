<?php

declare(strict_types=1);

namespace Warp\Exception;

/**
 * Marks that error caused by invalid user data.
 * Can be converted to 400 HTTP Error.
 */
interface InvalidInputExceptionInterface extends \Throwable
{
}
