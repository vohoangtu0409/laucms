<?php
namespace Application\Routing\Exceptions;

use Application\Contracts\ExceptionHandle;

class RouteNotFound extends \Exception implements ExceptionHandle{

}