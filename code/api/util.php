<?php

 function sshCommand($command){
  $connection = ssh2_connect('localhost', 22);
  ssh2_auth_password($connection, 'ubuntu', 'ubuntu');

  $stream = ssh2_exec($connection, $command);

  stream_set_blocking($stream, true);
  $outStream = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
  $errorStream = ssh2_fetch_stream($stream, SSH2_STREAM_STDERR);
  return [
    'outStream' => stream_get_contents($outStream),
    'errorStream' => stream_get_contents($errorStream)
  ];
}
