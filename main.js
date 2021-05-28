$(document).ready(function(){
    $('.swift').click(function(){
        var signButton = $(this).html();
        console.log(signButton);
        debugger;
            $('.sign_up').html("se connecter"); // sign up button text change
            $('.sign_in').html("S'inscrire"); // sign in button text change
            $('.swift_right').show(); // second logo show
            $('.b-forgot').show(); // forgot option show
            $('.form_title').html('Sign in to Guide'); // form title text change
            $('.b-subtext').html('or use your email account'); // form sub title text change
            $('.user_title').html('Hello, Friend'); // user title text change
            $('.user_subTitle').html('Enter your personal details </br> and start journey with us.'); // user sub title text change
            $('.b-title').css('margin-top','100px'); // user section add margin top in css
            $('.swift_left').hide(); // default logo hide
            $('.username').hide(); // form user field hide
            $('.b-wrapper').addClass('swift_element'); // add reverse
            $('.adress').hide();
        

    })
})

