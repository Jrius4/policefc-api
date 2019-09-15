
const customJS = () =>{
    $(document).ready(function(){
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
              $(".fixed-top").css("background" , "blue");
            }
      
            else{
                $(".fixed-top").css("background" , "#333");  	
            }
        })
      })
}

export {customJS};