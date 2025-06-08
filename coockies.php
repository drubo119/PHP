<!--Information about a user stored in a user's web-browser targeted advertisement,browsing preferences and other non-sensitive data   -->
<?php

setcookie("user", "John Doe", time() + (86400 * 2), "/"); // 86400 = 1 day
setcookie("location", "USA", time()-0, "/"); // 86400 = 1 day
setcookie("preferences", "dark_mode", time() + (86400 * 5), "/"); // 86400 = 1 day

foreach($_COOKIE as $key => $value) {
    echo "$key: $value <br>";
}
if(isset($_COOKIE["user"])) {
    echo "User cookie is set!<br>";
} else {
    echo "User cookie is not set!<br>";
}
if(isset($_COOKIE["location"])) {
  echo "Location cookie is set!<br>";
} else {
  echo "Location cookie is not set!<br>";
}

?>