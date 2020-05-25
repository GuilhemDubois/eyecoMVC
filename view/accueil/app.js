$('.m-nav-toggle').click(function(e){/*permet de faire apparaitre et disparaitre au click pour le burger*/
    e.preventDefault();
    $('.m-right').toggleClass('is-open');
    $('.m-nav-toggle').toggleClass('is-open');
})