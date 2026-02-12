<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Base Site URL
     * --------------------------------------------------------------------------
     */
    public string $baseURL = 'https://apoena.techinnovationbr.com.br/';

    /**
     * Allowed Hostnames in the Site URL
     */
    public array $allowedHostnames = [];

    /**
     * Index File
     */
    public string $indexPage = '';

    /**
     * URI PROTOCOL
     */
    public string $uriProtocol = 'REQUEST_URI';

    /**
     * Default Locale
     */
    public string $defaultLocale = 'pt-BR';

    /**
     * Negotiate Locale
     */
    public bool $negotiateLocale = false;

    /**
     * Supported Locales
     */
    public array $supportedLocales = ['pt-BR', 'en'];

    /**
     * Application Timezone
     */
    public string $appTimezone = 'America/Sao_Paulo';

    /**
     * Default Character Set
     */
    public string $charset = 'UTF-8';

    /**
     * Force Global Secure Requests
     */
    public bool $forceGlobalSecureRequests = true;

    /**
     * Session Driver
     */
    public string $sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler';

    /**
     * Session Cookie Name
     */
    public string $sessionCookieName = 'ci_session';

    /**
     * Session Expiration
     */
    public int $sessionExpiration = 7200;

    /**
     * Session Save Path
     */
    public string $sessionSavePath = WRITEPATH . 'session';

    /**
     * Cookie Prefix
     */
    public string $cookiePrefix = '';

    /**
     * Cookie Domain
     */
    public string $cookieDomain = '';

    /**
     * Cookie Path
     */
    public string $cookiePath = '/';

    /**
     * Cookie Secure
     */
    public bool $cookieSecure = true;

    /**
     * Cookie HTTP Only
     */
    public bool $cookieHTTPOnly = true;

    /**
     * Cookie SameSite
     */
    public string $cookieSameSite = 'Lax';

    /**
     * Content Security Policy
     */
    public bool $CSPEnabled = false;
}
