<?php
spl_autoload_register('autoloader');
function autoloader($class){
  include("$class.php");
}

class MyClass extends Db{
  public function __construct($db){
    parent::__construct($db);
  }
}

try {
  $server = new SOAPServer(
    NULL,
    array(
     'uri' => 'http://localhost/soap/server.php'
    )
  );

  $server->setClass('MyClass', 'my_sqlite_db.db'); 
  // $server->setClass('Db','my_sqlite_db.db'); // directly set the Db Class
  $server->handle();
}

catch (SOAPFault $f) {
  print $f->faultstring;
}

?>