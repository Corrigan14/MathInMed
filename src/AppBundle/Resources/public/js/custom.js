function toggleAnswer(param) {
    var $answerId = '#answer' + param;
    $($answerId).toggle(1000);
}

function toggleHelper(param) {
    var $helperId = '#helper' + param;
    $($helperId).toggle(1000);
}

function toggleTable(param) {
    var $tableId = '#table' + param;
    $($tableId).toggle(1000);
}

function toggleText(param) {
    var $tableId = '#text' + param;
    $($tableId).toggle(1000);
}

function togglePersonalInfo(param) {
    var $infoResearch = $('#infoResearch'),
    $infoPublication = $('#infoPublication'),
    $infoTeaching = $('#infoTeaching'),
    $infoEducation = $('#infoEducation'),
    $infoWork = $('#infoWork'),
    $infoReference = $('#infoReference'),
    $tableId = '#info' + param;

    if($tableId !== $infoResearch){
        $infoResearch.hide();
    }

    if($tableId !== $infoPublication){
        $infoPublication.hide();
    }

    if($tableId !== $infoTeaching){
        $infoTeaching.hide();
    }

    if($tableId !== $infoEducation){
        $infoEducation.hide();
    }

    if($tableId !== $infoWork){
        $infoWork.hide();
    }

    if($tableId !== $infoReference){
        $infoReference.hide();
    }

    $($tableId).toggle(1000);
}

function toggleGameTask(param) {
    var $tableId = '#task' + param;
    $($tableId).toggle(1000);
}

jQuery(document).ready(function () {
    var $topNavbar = $('#undefined-sticky-wrapper'),
        $owmenu = $('#ownmenu');

    if ($topNavbar.hasClass('is-sticky')) {
        $owmenu.addClass('white-navbar');
    } else {
        $owmenu.removeClass('white-navbar');
    }
});

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

/*-----------------------------------------------------------------------------------*/
/*	RIGHT MENU
 /*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    var $rightNavigationHolder = $('#choose_color'),
        $rightNavigationAnswers = $('#choose_color_answers'),
        $rightNavigationHelpsers = $('#choose_color_helpers'),
        $rightNavigationChat = $('#choose_color_chat'),
        $answers = $('#answers'),
        $helpers = $('#helpers'),
        $chat = $('#chat');

    //hide leftMenuNavigation and rightNavigation if topMenu is opened
    $rightNavigationAnswers.on('click', function (event) {
        $rightNavigationHolder.addClass('position');
        $answers.removeClass('hide-element');
        $helpers.addClass('hide-element');
        $chat.addClass('hide-element');
    });

    $rightNavigationHelpsers.on('click', function (event) {
        $rightNavigationHolder.addClass('position');
        $helpers.removeClass('hide-element');
        $answers.addClass('hide-element');
        $chat.addClass('hide-element');
    });

    $rightNavigationChat.on('click', function (event) {
        $rightNavigationHolder.addClass('position');
        $chat.removeClass('hide-element');
        $answers.addClass('hide-element');
        $helpers.addClass('hide-element');
    })
});
