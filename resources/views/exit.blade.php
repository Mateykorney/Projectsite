<?php
    setcookie('user', "", time() - 3600, "/");
    header("Location: /");
    exit();

