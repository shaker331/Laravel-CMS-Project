<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "cbad3af178140f",
  "password" => "4ca899b9e5bf74",
  "sendmail" => "/usr/sbin/sendmail -bs"
];