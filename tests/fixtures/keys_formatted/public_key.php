<?php

$key = <<<KEY
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsEW1HShWVHTNu1Hr7UxX
6oi3h9CIi1mU9R99ACaQbXcLgfi0mOoLVkSaG5bsnc627mjtHHtprw5wZgH0iz4s
SlII1DxTXI+O8/jGw2edJOpwzjZpLpbQ2N0zJWuQTwGYbK7dzlArRYCZKzAdQTDQ
ZrPw/IpOOqf1TTA29Pw0PwNwcyq1Q6IYrl+hJVirP73qagA+M55Zx940Qekbq/Jd
sFONZh5uEVYOOQ7LYDfLAZm4nJd1qHILz4pWz02JPmVsJ3PVRkkB/isBYLAkUPf0
Nhh8W5/6Q9A11LUlcHo0O2NuXxt4xBpcJhn9bR0DMg5acR/T0cMXievXjIBwdCtU
rwIDAQAB
-----END PUBLIC KEY-----

KEY;

return [
    'type' => 'pem',
    'is_public' => true,
    'content' => $key,
];