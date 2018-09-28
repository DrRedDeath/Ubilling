<?php

$user_ip = zbs_UserDetectIp('debug');
$user_login = zbs_UserGetLoginByIp($user_ip);
$us_config = zbs_LoadConfig();

if (@$us_config['OM_ENABLED']) {
    $userData = zbs_UserGetStargazerData($user_login);
    //Check for user active state
    if (($userData['Passive'] == 0) AND ( $userData['Down'] == 0 )) {
        $omegaFront = new OmegaTvFrontend();
        $omegaFront->setLogin($user_login);

        //device deletion
        if (la_CheckGet(array('deletedevice'))) {
            $omegaFront->pushDeviceDelete($_GET['deletedevice']);
            rcms_redirect('?module=omegatv');
        }

        //default sub/unsub form
        show_window(__('Available subscribtions'), $omegaFront->renderSubscribeForm());

        //show list of available devices
        show_window(__('Devices'), $omegaFront->renderUserDevicesForm());

        //link to web-player
        $viewUrl = $omegaFront->getViewButtonURL();
        $viewLink = la_tag('a', false, 'mgviewcontrol', 'href="' . $viewUrl . '" target="_BLANK"') . __('View online') . la_tag('a', true);
        show_window('', $viewLink);
    } else {
        show_window(__('Sorry'), __('You can not use this service'));
    }
} else {
    show_window(__('Sorry'), __('This module is disabled'));
}
?>