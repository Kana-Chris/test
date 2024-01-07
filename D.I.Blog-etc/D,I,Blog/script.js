$(function(){

    $(".mainNav ul li").hover(
        function(){
            $(this).css("color","orange")
        },
        function(){
            $(this).css("color","white")
        });
});