function toggleAnswer(param) {
    var $answerId = '#answer' + param;
    console.log($answerId);
    $($answerId).toggle(1000);
}