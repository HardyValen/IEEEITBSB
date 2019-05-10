$('nav').addClass('navbar-transparent');
$(window).scroll(function(){
    var vhfull = $(window).height()*(9/10);
    var scroll = $(window).scrollTop();
    if(scroll>=vhfull){
        $('nav').removeClass('navbar-transparent');
    }
    else{
        $('nav').addClass('navbar-transparent');
    }
});
