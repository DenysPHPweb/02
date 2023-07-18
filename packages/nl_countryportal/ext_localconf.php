<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function () {
    \FluidTYPO3\Flux\Core::registerProviderExtensionKey('NL.NlCountryportal', 'Page');
    \FluidTYPO3\Flux\Core::registerProviderExtensionKey('NL.NlCountryportal', 'Content');
});