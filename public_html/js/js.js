$(window).scroll(function () {
    var width = screen.width;
    if (width == 1920) {
        if ($(this).scrollTop() < 0) {
            alert('A página está acima do ponto 0, por favor, recarregue-a!');
        }


        if ($(this).scrollTop() < 700) {
            $('#01').css('border', '0px solid white');
            $('#01').css('border-radius', '0%');
            $('#setaUp').hide(500);
        }

        if ($(this).scrollTop() >= 700) {
            $('#01').css('border', '1px solid white');
            $('#01').css('border-radius', '10%');
            $('#02').css('border', '0px solid white');
            $('#02').css('border-radius', '0%');
            $('#setaUp').show(400);
            $('.seta').attr({'href': '#topSite'});
        }

        if ($(this).scrollTop() >= 1600) {
            $('#01').css('border', '0px solid white');
            $('#01').css('border-radius', '0%');
            $('#02').css('border', '1px solid white');
            $('#02').css('border-radius', '10%');
            $('#03').css('border', '0px solid white');
            $('#03').css('border-radius', '0%');
            $('.seta').attr({'href': '#servicosComp'});
        }

        if ($(this).scrollTop() >= 2600) {
            $('#02').css('border', '0px solid white');
            $('#02').css('border-radius', '0%');
            $('#03').css('border', '1px solid white');
            $('#03').css('border-radius', '10%');
            $('#04').css('border', '0px solid white');
            $('#04').css('border-radius', '0%');
            $('.seta').attr({'href': '#secaoCliente'});

        }

        if ($(this).scrollTop() >= 3600) {
            $('#03').css('border', '0px solid white');
            $('#03').css('border-radius', '0%');
            $('#04').css('border', '1px solid white');
            $('#04').css('border-radius', '10%');
            $('#05').css('border', '0px solid white');
            $('#05').css('border-radius', '0%');
            $('.seta').attr({'href': '#secaoProjetos'});

        }

        if ($(this).scrollTop() >= 4500) {
            $('#04').css('border', '0px solid white');
            $('#04').css('border-radius', '0%');
            $('#05').css('border', '1px solid white');
            $('#05').css('border-radius', '10%');
            $('.seta').attr({'href': '#sobre'});

        }
    }

    else if (width == 1360) {




        if ($(this).scrollTop() < 790) {
            $('#01').css('border', '0px solid white');
            $('#01').css('border-radius', '0%');
            $('#setaUp').hide(500);
        }

        if ($(this).scrollTop() >= 790) {
            $('#01').css('border', '1px solid white');
            $('#01').css('border-radius', '10%');
            $('#02').css('border', '0px solid white');
            $('#02').css('border-radius', '0%');
            $('#setaUp').show(400);
            $('.seta').attr({'href': '#topSite'});
        }

        if ($(this).scrollTop() >= 1680) {
            $('#01').css('border', '0px solid white');
            $('#01').css('border-radius', '0%');
            $('#02').css('border', '1px solid white');
            $('#02').css('border-radius', '10%');
            $('#03').css('border', '0px solid white');
            $('#03').css('border-radius', '0%');
            $('.seta').attr({'href': '#servicosComp'});
        }

        if ($(this).scrollTop() >= 2480) {
            $('#02').css('border', '0px solid white');
            $('#02').css('border-radius', '0%');
            $('#03').css('border', '1px solid white');
            $('#03').css('border-radius', '10%');
            $('#04').css('border', '0px solid white');
            $('#04').css('border-radius', '0%');
            $('.seta').attr({'href': '#secaoCliente'});

        }

        if ($(this).scrollTop() >= 3180) {
            $('#03').css('border', '0px solid white');
            $('#03').css('border-radius', '0%');
            $('#04').css('border', '1px solid white');
            $('#04').css('border-radius', '10%');
            $('#05').css('border', '0px solid white');
            $('#05').css('border-radius', '0%');
            $('.seta').attr({'href': '#secaoProjetos'});

        }

        if ($(this).scrollTop() >= 3940) {
            $('#04').css('border', '0px solid white');
            $('#04').css('border-radius', '0%');
            $('#05').css('border', '1px solid white');
            $('#05').css('border-radius', '10%');
            $('.seta').attr({'href': '#sobre'});

        }
    }
    else if (width == 1250) {




        if ($(this).scrollTop() < 790) {
            $('#01').css('border', '0px solid white');
            $('#01').css('border-radius', '0%');
            $('#setaUp').hide(500);
        }

        if ($(this).scrollTop() >= 790) {
            $('#01').css('border', '1px solid white');
            $('#01').css('border-radius', '10%');
            $('#02').css('border', '0px solid white');
            $('#02').css('border-radius', '0%');
            $('#setaUp').show(400);
            $('.seta').attr({'href': '#topSite'});
        }

        if ($(this).scrollTop() >= 1550) {
            $('#01').css('border', '0px solid white');
            $('#01').css('border-radius', '0%');
            $('#02').css('border', '1px solid white');
            $('#02').css('border-radius', '10%');
            $('#03').css('border', '0px solid white');
            $('#03').css('border-radius', '0%');
            $('.seta').attr({'href': '#servicosComp'});
        }

        if ($(this).scrollTop() >= 2400) {
            $('#02').css('border', '0px solid white');
            $('#02').css('border-radius', '0%');
            $('#03').css('border', '1px solid white');
            $('#03').css('border-radius', '10%');
            $('#04').css('border', '0px solid white');
            $('#04').css('border-radius', '0%');
            $('.seta').attr({'href': '#secaoCliente'});

        }

        if ($(this).scrollTop() >= 3100) {
            $('#03').css('border', '0px solid white');
            $('#03').css('border-radius', '0%');
            $('#04').css('border', '1px solid white');
            $('#04').css('border-radius', '10%');
            $('#05').css('border', '0px solid white');
            $('#05').css('border-radius', '0%');
            $('.seta').attr({'href': '#secaoProjetos'});

        }

        if ($(this).scrollTop() >= 3900) {
            $('#04').css('border', '0px solid white');
            $('#04').css('border-radius', '0%');
            $('#05').css('border', '1px solid white');
            $('#05').css('border-radius', '10%');
            $('.seta').attr({'href': '#sobre'});

        }
    }
    else{
        
    }
});





jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
    });
});

