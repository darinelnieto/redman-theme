var state_menu = false;
$('.bar-menu').on('click', ()=>{
    if(state_menu === false){
        $('.nav-contain').addClass('active');
        state_menu =  true;
    }else{
        $('.nav-contain').removeClass('active');
        state_menu = false;
    }
});

/*=============== Banner slide ==============*/
$('.banner-slide').owlCarousel({
    autoplay:true,
    loop:true,
    nav:false,
    dots:true,
    margin:0,
    items:1
}).css({'opacity':1});
/*============== Form ==============*/
$(()=>{
    $('.button-contain button').prop('disabled', true);
});
$('.policies label').on('click', function(){
    var checkbox = $('input[type="checkbox"]', this);
    if(checkbox.prop('checked')){
        $('.checked', this).addClass('active');
        $('.button-contain button').prop('disabled', false);
    }else{
        $('.checked', this).removeClass('active');
        $('.button-contain button').prop('disabled', true);
    }
});
const thank_you = '/gracias-por-unirte';
/*============= Form submit =============*/
var wpcf7Elm = document.querySelector( '#footer-wrapper .wpcf7' );
 
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
        window.location.href = thank_you;
}, false );