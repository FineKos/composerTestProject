<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 1/14/16
 * Time: 4:16 PM
 */

namespace Myspace;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Galaxy

{

    public function spaceLog() {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addWarning('Foo');
    }
}