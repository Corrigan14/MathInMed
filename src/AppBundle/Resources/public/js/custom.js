function toggleAnswer(param) {
    var $answerId = '#answer' + param;
    console.log($answerId);
    $($answerId).toggle(1000);
}

/*-----------------------------------------------------------------------------------*/
/*	LEFT + TOP MENU
 /*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    var $leftMenuTrigger = $('#cd-menu-trigger'),
        $topMenu = $('#ownmenu'),
        $rightNavigation = $('#choose_color');

    //hide leftMenuNavigation and rightNavigation if topMenu is opened
    $topMenu.on('click', function (event) {
        $leftMenuTrigger.toggleClass('hide-element');
        $rightNavigation.toggleClass('hide-element');
    });
});
