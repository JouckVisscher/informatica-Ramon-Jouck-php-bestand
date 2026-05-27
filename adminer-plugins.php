<?php

return [
    new AdminerLoginPasswordLess(
        password_hash("secret123", PASSWORD_DEFAULT)
    ),
];