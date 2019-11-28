<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
  
  		//On clicking the cluster
  		$(".menu-item-has-children .menu-item-has-children > a").on("click", function(e){
          
          		//Prevent Default
          		e.preventDefault();
          
          		//Return false
          		return false;
        });
  
  		//On hovering on the links
  		
  	
  		//Variables that store the default information
    	var the_selector = $('#ars-screen-changed');
    	var default_background = the_selector.css('background-image');
    		default_background = default_background.replace('url(','').replace(')','').replace(/\"/gi, "");
 	
  
  		//HOVER	
  		// Margo Mulyo Jaya
  		$('.menu-item-430').hover(
              function(){
                	$("#home-image-column .home-image-bg#banner-margomulyo").css("opacity", 1);
                 	//the_selector.css('background-image', "url('https://kitatechnology.com/staging/hutomoworld-wp/wp-content/uploads/2019/11/Banner-Margomulyo-Jaya-1-2.jpg')");
              },
              function(){
                	$("#home-image-column .home-image-bg#banner-margomulyo").css("opacity", 0);
                	//the_selector.css('background-image', "url('"+default_background+"')");
              }
  		);
  
        // The Bibiz
        $('.menu-item-435').hover(
              function(){
                	$("#home-image-column .home-image-bg#banner-the-biz").css("opacity", 1);
                    //the_selector.css('background-image', "url('https://kitatechnology.com/staging/hutomoworld-wp/wp-content/uploads/2019/11/The-Bibiz-Banner.jpg')");
              },
              function(){
                	$("#home-image-column .home-image-bg#banner-the-biz").css("opacity", 0);
                    //the_selector.css('background-image', "url('"+default_background+"')");
              }
        );

        // Mansion Nine
        $('.menu-item-441').hover(
              function(){
                	$("#home-image-column .home-image-bg#banner-mansionnine").css("opacity", 1);
                    //the_selector.css('background-image', "url('https://kitatechnology.com/staging/hutomoworld-wp/wp-content/uploads/2019/11/Mansion-Nine-Banner-3-2.jpg')");
              },
              function(){
                	$("#home-image-column .home-image-bg#banner-mansionnine").css("opacity", 0);
                    //the_selector.css('background-image', "url('"+default_background+"')");
              }
        );
});</script>
<!-- end Simple Custom CSS and JS -->
