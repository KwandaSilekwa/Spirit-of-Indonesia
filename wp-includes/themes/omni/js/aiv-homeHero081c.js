(function($){

    class aivCarousel{

        constructor(carouselClass, seconds){

            this.carousel = $('.' + carouselClass);

            this.time = seconds * 1000;

            this.slides =  this.carousel.children();

            this.count = this.slides.length;

            this.first = 0;
            this.last = this.count - 1;
            this.previous = 0;
            this.current = 0;
            this.next = 0;

            this.previous = this.last;
            this.next = this.current + 1;
            
            setTimeout(() => this.loop(), this.time);
        }

        step(){
            this.previous = this.current;
            this.current = this.next;
            if(this.current == this.last){
                this.next = this.first;
            }else{
                this.next++;
            }
        }

        display(){
            this.slides.each(function (i, el) {
                if(i == this.previous){
                    $(el).hide(); // Do animation
                }
                if(i == this.current){
                    $(el).show(); // Do animation
                }else{
                    $(el).hide();
                }
            }.bind(this));
        }

        loop(){
            this.step();
            this.display();
            setTimeout(() => this.loop(), this.time);
        }

    }

    $(document).ready(function(){
        
        var homeHeroCarouselClass = "aiv-pre-content";
        if($('.' + homeHeroCarouselClass).children().length > 1){
            const homeHeroCarousel = new aivCarousel(homeHeroCarouselClass, 5);
        }
        
    });


})(jQuery);