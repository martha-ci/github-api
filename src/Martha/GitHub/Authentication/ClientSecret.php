<?php

namespace Martha\GitHub\Authentication;

use Buzz\Message\Request;

/**
 * Class ClientSecret
 * @package Martha\GitHub\Authentication
 */
class ClientSecret extends AbstractAuthentication
{
    /**
     * The client_id for the application.
     * @var string
     */
    protected $clientId;

    /**
     * The client_secret for the application.
     * @var string
     */
    protected $clientSecret;

    /**
     * Stores the authentication information for later use.
     *
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
       $this->clientSecret = $clientSecret;
    }

    /**
     * @param Request $request
     */
    public function authenticate(Request $request)
    {
        if ($request->getMethod() != 'GET') {
            $content = $request->getContent();

            $content = $content ? json_decode($content, true) : [];
            $content['client_id'] = $this->clientId;
            $content['client_secret'] = $this->clientSecret;

            $request->setContent($content);
        }
    }
} 
