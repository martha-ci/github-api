<?php

namespace Martha\GitHub\Request\Me;

use Martha\GitHub\Request\AbstractRequest;

/**
 * Class Emails
 *
 * @see http://developer.github.com/v3/users/emails/
 * @package Martha\GitHub\Request\Me
 */
class Emails extends AbstractRequest
{
    /**
     * List email addresses for a user.
     *
     * @todo
     * @see http://developer.github.com/v3/users/emails/#list-email-addresses-for-a-user
     * @return array
     */
    public function emails()
    {
        return array();
    }

    /**
     * Add email address(es).
     *
     * @todo
     * @see http://developer.github.com/v3/users/emails/#add-email-addresses
     * @param array $parameters
     * @return array
     */
    public function create(array $parameters)
    {
        return array();
    }

    /**
     * Delete email address(es).
     *
     * @todo
     * @see http://developer.github.com/v3/users/emails/#delete-email-addresses
     * @param mixed $parameters
     */
    public function delete($parameters)
    {

    }
}
