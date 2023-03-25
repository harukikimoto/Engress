$(function(){

    /*ハンバーガーメニュー*/
    $(".nav-toggle").click(function(){
        $(this).toggleClass("open");
        $('.navigation nav').toggleClass("open");
    });

    /*アコーディオンメニュー*/
    $('.question-content h4').click(function(){
        $(this).next('.question-content p').slideToggle();
        $('.question-content h4').not($(this)).next('.question-content p').slideUp();
        $(this).toggleClass('open');
        $('.question-content h4').not($(this)).removeClass('open');
    });

    /*スクロールヒント*/
    if(window.matchMedia("(max-width: 960px)").matches){
        new ScrollHint('.fee-table-inner', {
            suggestiveShadow: true,
            remainingTime: 5000,
            i18n: {
                scrollable: 'スクロールできます'
            }
        });
    }
    
})
    


