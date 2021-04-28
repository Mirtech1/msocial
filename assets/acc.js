/*function togglefunction(){
        if ( $(window).width() < 768 ) {
            $(function(){
                // add a class .collapse to a div .showHide
                $('.showHide').addClass('collapse');
                // set display: "" in css for the toggle button .btn.btn-primary
                $('button.btn.btn-primary').css('display', '');// removes display property to make it visible
            });
        }
        else {
            $(function(){
                // remove a class .collapse from a div .showHide
                $('.showHide').removeClass('collapse');
                // set display: none in css for the toggle button .btn.btn-primary  
                $('button.btn.btn-primary').css('display', 'none');// hides button display on bigger screen
            });
        }
    }
    $(window).resize(expandCollapse); // calls the function when the window first loads*/
function myToggle(){
    if ($(window).width < 700) {
        document.getElementsByClassName("showHide").addClass("collapse");
    }else{
        document.getElementsByClassName("showHide").removeClass("collapse");
    }
}