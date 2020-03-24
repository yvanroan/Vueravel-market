<?php

namespace App\Constants;

/**
 * Message class for all responses sent from our API.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Message
{
    const VALIDATION_ERROR = 'an error occured during the validation process.';

    const SUCCESSFULL_AUTH = 'user successfully authenticated';
    const SUCCESSFULL_UPDATE = 'successfully updated';

    const CREDENTIALS_ERROR = 'incorrect credentials';

    const UNAUTHORIZED = 'unauthorized action';

    const INCORRECT_REQUEST = 'incorrect request';
}
