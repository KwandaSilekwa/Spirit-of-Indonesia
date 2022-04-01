(function ($) {

    class Cart{
        
        constructor(){
            this.journeys = this.getCookie();
            if(!this.journeys){
                this.journeys = [];
            }else{
                this.journeys = JSON.parse(this.journeys);
            }
        }

        addToCart(journeyID, roomIndex, roomName, quantity){
            if(quantity && quantity != 0){
                var journeyIndex = 0;
                var journeyExist = false;
                this.journeys.forEach(function (journey, index)  {
                    if(journey.id == journeyID){
                        journeyExist = true;
                        journeyIndex = index;
                    }
                });
                if(journeyExist){
                    
                    this.journeys[journeyIndex].rooms.push({
                        name: roomName,
                        index: roomIndex,
                        quantity: quantity   
                    });
    
                }else{
    
                    this.journeys.push({
                        id: journeyID,
                        rooms: [{
                         name: roomName,
                         index: roomIndex,
                         quantity: quantity   
                        }]
                    });
    
                }
    
                this.setCookie();

                return true;
            }else{
                
                alert("Please select how many rooms you need");

                return false;
            }
        }

        clearCart(){
            $.cookie("aiv-cart", null);
        }

        setCookie(){
            $.cookie("aiv-cart", JSON.stringify(this.journeys), { 
                path: '/',
                expires: 30 
            });
        }

        getCookie(){
            return $.cookie("aiv-cart");
        }

    }
    
    $(document).ready(function () {

        window.aivCart = new Cart();

        $(".addToCart").each(function(){
            $(this).click(function () {
                var journeyID = $(this).data("journeyid");
                var roomIndex = $(this).data("roomindex");
                var roomName = $(this).data("target");
                var quantity = $("#cartroom-" + roomIndex).val();
                if(window.aivCart.addToCart(journeyID, roomIndex, roomName, quantity)){
                    // $("#cartroomcontainer-" + roomIndex).html("<span class='margin-t-0'><b>Your rooms have been added. </b><span>");
                    $("#bookbtncart-"+roomIndex).show();
                    $("#roomadded-"+roomIndex).show();
                    
                }                
            });
        });

        jQuery('<div class="quantity-nav"><button class="quantity-button quantity-up"><i class="fas fa-caret-up"></i></button><button class="quantity-button quantity-down"><i class="fas fa-caret-down"></i></button></div>').insertAfter('.quantity input');
        jQuery('.quantity').each(function () {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            input.val(1);

            btnUp.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
            });

            btnDown.click(function () {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
            });

        });
  
    });

})(jQuery);
  