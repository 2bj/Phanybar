<?php namespace Bakyt\Console;

/**
 * Class Phanybar
 *
 * @package Bakyt\Console
 */
class Phanybar
{
    /**
     * @var string
     */
    protected $server;

    /**
     * @var resource
     */
    protected $socket;

    public function __construct($server = '127.0.0.1')
    {
        $this->server = $server;

        if (!($this->socket = socket_create(AF_INET, SOCK_DGRAM, 0))) {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);

            echo "Couldn't create socket: [$errorcode] $errormsg \n";
            exit(1);
        }
    }

    /**
     * @param     $color
     * @param int $port
     */
    public function send($color, $port = 1738)
    {
        if (!socket_sendto($this->socket, $color, strlen($color), 0, $this->server, $port)) {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);

            echo "Could not send data: [$errorcode] $errormsg \n";
            exit(1);
        }
    }
}
