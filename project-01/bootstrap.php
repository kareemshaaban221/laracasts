<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = (require 'config/config.php') ['database'];

return new QueryBuilder(
    Connection::make($config)
);