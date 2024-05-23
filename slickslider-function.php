
function slick_slider_shortcode() {
    ob_start();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Slick Playground</title>
        <meta charset="UTF-8">
        <!-- Add CSS links -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
    width: 94%;
    margin: 100px auto;
}

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }


    .auther_content h5 {
      margin-bottom: 2px;
    margin-top: 0px;
    text-transform: capitalize;
}


.auther_content p{
    margin:0px;
}

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }

    .testimonial-content {
    height: 473px;
    position: absolute;
    bottom: 50%;
    width: 100%;
    max-width: 477px;
    background-color: rgb(255, 255, 255);
    box-shadow: 14.161px 21.805px 70px 0px rgba(213, 158, 109, 0.08);
    transform: translate(50px, 63%);
    padding: 25px 20px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}



.testominal-txt p {
    font-family: 'Montserrat' !important;
    color: #2e4248;
    font-style: italic;
    font-size: 19px;
    line-height: 34px;
    font-weight: 300;
}


.testominal-txt img {
    width: 100%;
    max-width: 73px;
}

.auther {
    display: flex;
    align-items: center;
    margin-bottom: 0rem;
}


.slider_star {
    text-align: end;
}



    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }


    
  </style>
    </head>
    <body>

    <section class="center slider">
    <div>
       <div class="main_img">
         <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/slider.webp" alt="slider">
       </div>
      <div class="testimonial-content">
          <div class="testominal-txt">
            <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/right-quote.webp" alt="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
            </p>
            <div class="auther">
               <div class="auther_media">
                <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/auther.webp" alt="auther-image">
               </div>
               <div class="auther_content">
                  <h5>auther</h5>
                  <p>designation</p>
               </div>
               
            </div>
            <div class="slider_star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           </div>
          </div>
      </div>
    </div>
    <div>
    <div class="main_img">
         <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/slider.webp" alt="slider">
       </div>
      <div class="testimonial-content">
          <div class="testominal-txt">
            <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/right-quote.webp" alt="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
            </p>
            <div class="auther">
               <div class="auther_media">
                  <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/auther.webp" alt="auther-image">
               </div>
               <div class="auther_content">
                  <h5>auther</h5>
                  <p>designation</p>
               </div>
              
            </div>
            <div class="slider_star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           </div>
          </div>
      </div>
    </div>
    <div>
    <div class="main_img">
         <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/slider.webp" alt="slider">
       </div>
      <div class="testimonial-content">
          <div class="testominal-txt">
            <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/right-quote.webp" alt="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
            </p>
            <div class="auther">
               <div class="auther_media">
                <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/auther.webp" alt="auther-image">
               </div>
               <div class="auther_content">
                  <h5>auther</h5>
                  <p>designation</p>
               </div>
            </div>
            <div class="slider_star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           </div>
          </div>
      </div>
    </div>
    <div>
    <div class="main_img">
         <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/slider.webp" alt="slider">
       </div>
      <div class="testimonial-content">
          <div class="testominal-txt">
            <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/right-quote.webp" alt="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
            </p>
            <div class="auther">
               <div class="auther_media">
                <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/auther.webp" alt="auther-image">
               </div>
               <div class="auther_content">
                  <h5>auther</h5>
                  <p>designation</p>
               </div>
               
            </div>
            <div class="slider_star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           </div>
          </div>
      </div>
    </div>
    <div>
    <div class="main_img">
         <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/slider.webp" alt="slider">
       </div>
      <div class="testimonial-content">
          <div class="testominal-txt">
            <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/right-quote.webp" alt="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, 
            </p>
            <div class="auther">
               <div class="auther_media">
                <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/auther.webp" alt="auther-image">
               </div>
               <div class="auther_content">
                  <h5>auther</h5>
                  <p>designation</p>
               </div>
               
            </div>
            <div class="slider_star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           </div>
          </div>
      </div>
    </div>
    <div>
    <div class="main_img">
         <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/slider.webp" alt="slider">
       </div>
      <div class="testimonial-content">
          <div class="testominal-txt">
            <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/right-quote.webp" alt="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
            </p>
            <div class="auther">
               <div class="auther_media">
                <img src="https://vitalityworkout.nl/wp-content/uploads/2024/05/auther.webp" alt="auther-image">
               </div>
               <div class="auther_content">
                  <h5>auther</h5>
                  <p>designation</p>
               </div>
              
            </div>
            <div class="slider_star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
           </div>
          </div>
      </div>
    </div>
  
  </section>
        <!-- Add jQuery script -->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <!-- Add Slick Carousel script -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- Initialize Slick Carousel -->
        <script type="text/javascript">
            $(document).on('ready', function() {
                $(".center").slick({
                    dots: false,
                    arrows:false,
                    autoplay: true,
                    infinite: true,
                    centerMode: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            });
        </script>
    </body>
    </html>
    <?php
    return ob_get_clean();
}
add_shortcode('slick_slider', 'slick_slider_shortcode');