var starter = (function () {
    return {
        displayPrime: function(element) {
            element.fadeIn(7000);
        }
    }
})();

$(document).ready(function() {
    starter.displayPrime($('#prime'));
    console.log('all scripts loaded');
});
