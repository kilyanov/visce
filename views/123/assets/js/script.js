$(document).ready(() => {

    $(function(){
        new WOW().init(); 
        
        });
	
	var header = $('.header_top'),
		scrollPrev = 0;


    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
    
        if ( scrolled > 100 && scrolled > scrollPrev ) {
            header.addClass('out');
            
        } else {
            header.removeClass('out');
        }
        scrollPrev = scrolled;
    });

    
        $('.ui.accordion').accordion({
            selector: {
              trigger: '.title .icon'
            }
        });


        $(".rotate").click(function () {
            $(this).toggleClass("down");
        })

        $(".item").click(function () {
            var sideBar = $('.ui.sidebar')
            sideBar.sidebar('hide')
        })


        $('#up').click(function() {
            $('html, body').animate({scrollTop: 0},500);
            return false;
        })
 



    $('.ui.sidebar')
	    .sidebar('setting', 'transition', 'overlay')
	    .sidebar('setting', 'mobileTransition', 'overlay')
	    .sidebar('attach events', '#openSideBar')
	    .sidebar('attach events', '#closeSidebar');


    if($(document).find('#services').length > 0) {
        new ScrollBooster({
            viewport: $(document).find('#services')[0],
            content:  $(document).find('#services')[0],
            scrollMode: 'native',
            pointerMode: 'mouse',
            onPointerDown: function() { $(document).find('#services *:focus').blur() }
        });
    }


    $(document).find('.marquee').marquee({
		duration: $(document).width() > 767 ? 14500 : 12000,
		startVisible: true,
		duplicated: true
	});


    $(document).on('click', '#feedback .attachment svg', function() {

        if($(this).parent().find('input[type="file"]').length > 2) {
            return false;
        }

        $(this).parent().find('input[type="file"].current').click();
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
    
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });


    $(document).on('change', 'form#order input[name="attachment[]"].current', function(e) {

        let filename = $(this)[0].files[0].name;

        let html = '';

        html += '<div class="a_file">';
        html += '    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">';
        html += '        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.293 0.292985C6.48049 0.105445 6.73481 5.66346e-05 7 0H15C15.7956 0 16.5587 0.316055 17.1213 0.878636C17.6839 1.44122 18 2.20424 18 2.99985V18.9991C18 19.7947 17.6839 20.5577 17.1213 21.1203C16.5587 21.6829 15.7956 21.9989 15 21.9989H3C2.20435 21.9989 1.44129 21.6829 0.87868 21.1203C0.316071 20.5577 0 19.7947 0 18.9991V6.99965C5.66374e-05 6.73447 0.105451 6.48017 0.293 6.29269L6.293 0.292985ZM15 1.9999H8V6.99965C8 7.26486 7.89464 7.5192 7.70711 7.70672C7.51957 7.89425 7.26522 7.9996 7 7.9996H2V18.9991C2 19.2643 2.10536 19.5186 2.29289 19.7061C2.48043 19.8937 2.73478 19.999 3 19.999H15C15.2652 19.999 15.5196 19.8937 15.7071 19.7061C15.8946 19.5186 16 19.2643 16 18.9991V2.99985C16 2.73465 15.8946 2.48031 15.7071 2.29278C15.5196 2.10525 15.2652 1.9999 15 1.9999ZM3.414 5.9997H6V3.41383L3.414 5.9997ZM4 11.9994C4 11.7342 4.10536 11.4799 4.29289 11.2923C4.48043 11.1048 4.73478 10.9995 5 10.9995H13C13.2652 10.9995 13.5196 11.1048 13.7071 11.2923C13.8946 11.4799 14 11.7342 14 11.9994C14 12.2646 13.8946 12.5189 13.7071 12.7065C13.5196 12.894 13.2652 12.9994 13 12.9994H5C4.73478 12.9994 4.48043 12.894 4.29289 12.7065C4.10536 12.5189 4 12.2646 4 11.9994ZM4 15.9992C4 15.734 4.10536 15.4797 4.29289 15.2921C4.48043 15.1046 4.73478 14.9993 5 14.9993H13C13.2652 14.9993 13.5196 15.1046 13.7071 15.2921C13.8946 15.4797 14 15.734 14 15.9992C14 16.2644 13.8946 16.5188 13.7071 16.7063C13.5196 16.8938 13.2652 16.9992 13 16.9992H5C4.73478 16.9992 4.48043 16.8938 4.29289 16.7063C4.10536 16.5188 4 16.2644 4 15.9992Z" fill="black"/>';
        html += '    </svg>';
        html += '    <span class="file_title"><b>' + filename + '</b></span>';
        html += '</div>';

        $(document).find('form#order .attachment_files').append(html);

        $(this).clone().appendTo($(this).parent());

        $(this).removeClass('current');

        $(document).find('form#order input[name="attachment[]"].current')[0].value = null;

        if($(document).find('form#order .attachment_files .a_file:last .file_title b').width() > 170) {
            $(document).find('form#order .attachment_files .a_file:last .file_title b').addClass('overflowed');
        }
    });



    $(document).on('click', 'form#order .attachment_files .a_file', function() {
        let index = $(this).index();

        $(document).find('form#order input[name="attachment[]"]:nth(' + index + ')').remove();

        $(this).remove();    
    });

    $(function() {
        $(".orderButton").click(
          function() {
            var nametitle = $(this).attr('data-nametitle');
            $("#hide1").attr('value', nametitle);
          })
      });


    $(document).on('submit', 'form#order', function(e) {
        e.preventDefault();

        let form = $(this);

        form.find('button[type="submit"]').addClass('disabled');

        form.parent().addClass('loading');

        let data = new FormData(form[0]);

        $.ajax({
            url: '/order',
            type: 'post',
            data: data,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(json) {
                form.find('input, textarea').each((ind, elem) => {
                    $(elem).val('');

                    $(document).find('form#order input[name="attachment[]"]').not('.current').remove();

                    $(document).find('form#order .attachment_files .a_file').remove();
                });

                setTimeout(() => {
                    form.find('button[type="submit"]').text('Спасибо за обращение!')

                    setTimeout(() => {
                        form.find('button[type="submit"]').removeClass('disabled').text('Отправить')
                    }, 4000)
                }, 1000)
            },
            error: function() {
                alert('Кажется возникла непредвиденная ошибка при отправке :(');

                form.find('buttom[type="submit"]').removeClass('disabled');
            },
            complete: function() {
                setTimeout(() => {
                    form.parent().removeClass('loading');
                }, 1000)
            }
        });

        return false

    });

$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 1000, function() {
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) {
                return false;
                } else {
                $target.attr('tabindex','-1'); 
                $target.focus(); 
                };
            });
    }
  }
});




    $(document).on('submit', 'form#orderService', function(e) {
        e.preventDefault();

        let form = $(this);

        form.find('button[type="submit"]').addClass('disabled');

        form.parent().addClass('loading');

        let data = new FormData(form[0]);

        $.ajax({
            url: '/order',
            type: 'post',
            data: data,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(json) {
                form.find('input, textarea').each((ind, elem) => {
                    $(elem).val('');
                });

                setTimeout(() => {
                    form.find('button[type="submit"]').text('Спасибо за обращение!')

                    setTimeout(() => {
                        form.find('button[type="submit"]').removeClass('disabled').text('Отправить')

                        $(document).find('#exampleModal').modal('hide');
                    }, 4000)
                }, 1000)
            },
            error: function() {
                alert('Кажется возникла непредвиденная ошибка при отправке :(');

                form.find('buttom[type="submit"]').removeClass('disabled');
            },
            complete: function() {
                setTimeout(() => {
                    form.parent().removeClass('loading');
                }, 1000)
            }
        });

        return false

    });
});