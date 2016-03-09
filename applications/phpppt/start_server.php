<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;

// composer autoload
include __DIR__ . '/../../vendor/autoload.php';
include __DIR__ . '/../../src/autoload.php';

$io = new SocketIO(2020);
$io->on('connection', function($socket){
    $socket->addedUser = false;

    $socket->emit('UUID', 1);

    //建立消息中转站
    $socket->on('transfer.data',  function ($data) use ($socket){
        $socket->broadcast->emit('transfer.data', $data);
    });

    // when the client emits 'add user', this listens and executes
    $socket->on('control.login', function ($username) use ($socket){
        global $usernames, $numUsers;
        // we store the username in the socket session for this client
        $socket->username = $username;
        // add the client's username to the global list

        $usernames[$username] = $username;
        ++$numUsers;

        $socket->addedUser = true;
        $socket->emit('login', array(
            'numUsers' => $numUsers
        ));
        // echo globally (all clients) that a person has connected
        $socket->broadcast->emit('system', array(
            'action' => 'join',
            'joinUid' => 1
        ));
    });

    // when the user disconnects.. perform this
    $socket->on('disconnect', function () use($socket) {
        global $usernames, $numUsers;
        // remove the username from global usernames list
        if($socket->addedUser) {
            unset($usernames[$socket->username]);
            --$numUsers;

           // echo globally that this client has left
            $socket->broadcast->emit('system', array(
                'action' => 'leave',
                'leaveUid' => 1
            ));
        }
   });
   
});

Worker::runAll();
