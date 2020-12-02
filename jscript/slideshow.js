$(document).ready(function(){
    
        
    //configuration        
    var width= 1200;
    var animationSpeed=1500;
    var pause= 4500;
    var currentSlide= 1;
    var $slider= $('#slider');
    var $slideContainer= $slider.find('.slides');
    var $slides= $slideContainer.find('.slide');
    var interval;
    
    //setInterval
        //animate margin left
            //if it last slide, position 1 (0px;)
    function startSlider(){
      interval = setInterval(function(){
        $slideContainer.animate({'margin-left':'-='+width}, animationSpeed, function(){
            currentSlide++;
            if(currentSlide === $slides.length)
            {
                currentSlide= 1;
                $slideContainer.css('margin-left', 0);
            }
        });
    }, pause);  
    }
    function pauseSlider(){
        clearInterval(interval);
    }
    //listen for mouseenter and pause slideshow
    //resume on mouse leave
    $slider.on('mouseenter', pauseSlider).on('mouseleave', startSlider);
    startSlider();
});

$(document).ready(function(){
    
    //buttons for next and previous slide
        //prevouis button
    var $slide=$('.slides');
    $('.prev').on('click', function(){
        $slide.animate({left: '0%'}, 100, function(){
            $slide.css('margin-left', '-100%');
            $('.slide').first().before($('.slide').last());
        })
    });
        //next button
    var $slide=$('.slides');
    $('.next').on('click', function(){
        $slide.animate({rigth: '0%'}, 100, function(){
            $slide.css('margin-left', '-200%');
            $('.slide').last().before($('.slide').first());
        })
    });
});
//End od slider banner

//slideRight slideLeft on click viber and whatsupp
$(document).ready(function(){
    $(".viber_icon").click(function(){
      $(".viber").slideToggle(800);
      
    });
    $(".whatsupp_icon").click(function(){
      $(".whatsupp").slideToggle(800);
    });
  });

// end slideRight slideLeft on click viber and whatsupp