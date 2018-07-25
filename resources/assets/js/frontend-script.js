$(function () {
    $('#toogle-search-form').on('click', function() {
        $('#search-section').fadeToggle('fast');

        if ($('#search-section')[0].className === "open") {
            $(this).html('<i class="fa fa-search" aria-hidden="true"></i>');
            $('#search-section').removeClass('open');
        } else {
            if (document.getElementById('search-section').style.display === 'block') {
                $(this).html('<i class="fa fa-times" aria-hidden="true"></i>');
                $('#search-section').addClass('open');
            }
        }

    });

    //Check to see if the window is top if not then display button
    scrollupBtn();
	$(window).scroll(function(){
        scrollupBtn();
	});

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

    $('img').lazyload();

    $('.nav-btn').click(function () {
        $('.nav-btn').toggleClass('open');
        $('body').toggleClass('hide-overflow');
        $('.mg-nav-section').fadeToggle();
    });

    $(window).resize(function () {
        var width = $(window).width();

        if (width > 991) {
            $('.mg-nav-section').show();
            $('.nav-btn').removeClass('open');
        } else {
            $('.mg-nav-section').hide();
        }
        if ($(this).width() > 991) {
            $('ul.main-nav').find('li').hover(function() {
                $(this).find('ul').css("display","block")
            }, function() {
                $(this).find('ul').css("display","none")
            });
        } else {
            $('ul.main-nav').find('li').hover(function() {
                $(this).find('ul').css("display","none")
            });
        }
    });

    $('ul.main-nav').find('li').on('click', function () {
        var list = $(this);
        var downArrow = list.find('i.fa-angle-down');
        var subUl = list.find('ul');

        subUl.fadeToggle();
    });

    var cartContent = [];

    // Object.observe(cartContent, function(change) {
    // }),

    function scrollupBtn() {
        if ($(window).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
    }

    function addSingleProduct(guid) {

        $('.add-btn').hide();
        $('.add-loading').show();
        $.ajax({
            url: '/cart/add/single/' + guid,
            type: 'GET',
            dataType: 'json',
        })
        .done(function(response) {
            console.log(response);
            toastr["success"]("成功加入購物車");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            $('.add-btn').show();
            $('.add-loading').hide();
            console.log("complete");
        });

    }
});



