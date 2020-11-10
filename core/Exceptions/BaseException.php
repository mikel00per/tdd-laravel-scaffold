<?php

namespace Core\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BaseException extends Exception
{
    /**
     * Report the exception.
     * If your exception contains custom reporting logic that only occurs when certain conditions are met, you may need
     * to instruct Laravel to report the exception using the default exception handling configuration.
     *
     * Determine if the exception needs custom reporting...
     * @return false
     */
    public function report()
    {
        return false;

    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param Request $request
     * @return Response
     */
    public function render(Request $request)
    {
        return response()->view('errors.customs', [],500);
    }
}
