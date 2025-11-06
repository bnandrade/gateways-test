<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Throwable;

trait LogsExceptions
{
    protected function logException(Throwable $e, array $context = []): void
    {
        Log::error($e->getMessage(), [
            'exception' => get_class($e),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'trace' => $e->getTraceAsString(),
            ...$context,
        ]);
    }
}
