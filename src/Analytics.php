<?php

namespace Northeastern\Support;

/**
 * class Analytics
 * 
 * Northeastern University Support for Analytics
 *  - GTM Tag Manager script
 * 
 * @package Northeastern\Support
 */
class Analytics
{
    /**
     * Retrieve Northeastern Google Tag Manager script
     * 
     * @since 1.0 Initial Stable Release
     *
     * @return string
     */
    public static function googleTagManagerScript()
    {
        return "
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WGQLLJ');</script>
            <!-- End Google Tag Manager -->
        ";
    }

    /**
     * Retrieve Northeastern Google Tag Manager noscript
     * 
     * @since 1.0 Initial Stable Release
     *
     * @return string
     */
    public static function googleTagManagerNoScript()
    {
        return '
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGQLLJ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        ';
    }
}
