<?php

setcookie('key1', "Description1", time() + 86400);
setcookie('key2', "Description2", time() + 86400);
setcookie("name", "Cookies", time() + 86400);

print_r($_COOKIE);
var_dump($_COOKIE);
