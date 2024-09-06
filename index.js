$(document).ready(function() {
    $(".question-inside").on("click", function() {
    if ($(this).next(".question-description").hasClass("question-description__active")) {
        $(this).next(".question-description").slideUp(300);
        $(this).next(".question-description").removeClass("question-description__active");
        $(this).children(".arrow").removeClass("arrow__active");
        $(this).removeClass("question-inside__active");
        
    } 
    else { 
        $(this).next(".question-description").slideDown(300);
        $(this).next(".question-description").addClass("question-description__active");
        $(this).children(".arrow").addClass("arrow__active");
        $(this).addClass("question-inside__active");

    }});
});
