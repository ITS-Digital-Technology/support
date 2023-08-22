<?php

namespace Northeastern\Support;

/**
 * class Meta
 * 
 * Northeastern University Support for Meta tag related content
 *  - Brand Favicon support
 * 
 * @package Northeastern\Support
 */
class Meta
{
    /**
     * Retrieve various Northeastern head/meta tags
     * 
     * @since 1.0 Initial Stable Release
     *
     * @return string
     */
    public static function head()
    {
        return '
            <link rel="apple-touch-icon" sizes="57x57"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-57x57.png?v=2" />
            <link rel="apple-touch-icon" sizes="60x60"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-60x60.png?v=2" />
            <link rel="apple-touch-icon" sizes="72x72"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-72x72.png?v=2" />
            <link rel="apple-touch-icon" sizes="76x76"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-76x76.png?v=2" />
            <link rel="apple-touch-icon" sizes="114x114"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-114x114.png?v=2" />
            <link rel="apple-touch-icon" sizes="120x120"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-120x120.png?v=2" />
            <link rel="apple-touch-icon" sizes="144x144"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-144x144.png?v=2" />
            <link rel="apple-touch-icon" sizes="152x152"  href="https://brand.northeastern.edu/global/assets/favicon/apple-touch-152x152.png?v=2" />
            <link rel="icon" sizes="144x144" type="image/png" href="https://brand.northeastern.edu/global/assets/favicon/android-chrome-144x144.png?v=2" />
            <link rel="icon" sizes="32x32" type="image/png" href="https://brand.northeastern.edu/global/assets/favicon/favicon-32x32.png?v=2" />
            <link rel="icon" sizes="16x16" type="image/png" href="https://brand.northeastern.edu/global/assets/favicon/favicon-16x16.png?v=2" />
            <link rel="manifest" href="https://brand.northeastern.edu/global/assets/favicon/manifest.json" />
            <meta name="msapplication-TileColor" content="#ffffff" />
            <meta name="msapplication-TileImage" content="https://brand.northeastern.edu/global/assets/favicon/mstile-144x144.png?v=2" />
            <meta name="theme-color" content="#ffffff" />
        ';
    }
}
