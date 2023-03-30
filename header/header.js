
function showMenu() {
    $(".dropdown").toggle("dropdown-show");
    // $(".drop-menu").on("click", function(){
    // $(".dropdown").removeClass("dropdown-show");
    // })
    window.onclick = function (event) {

        if (event.target.matches(".dropdown-item") === false & event.target.matches(".abc") === false) {
            $(".dropdown").hide("dropdown-show");
        }
    };


}


function showNavbar() {
    var cname = $(".navbar-nav")
    if(!cname.hasClass("navbar-nav-show"))
    {
        cname.addClass("navbar-nav-show");
    }
    else{
        cname.removeClass("navbar-nav-show");
    }
}