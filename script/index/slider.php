<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <?php 
     if (!empty($_GET["uri"]) and ($_GET["uri"]=="/mycontent" OR $_GET["uri"]=="/mydesign")) { ?>
                   
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                      <li data-target="#myCarousel" data-slide-to="5"></li>
                <?php }
                else{
                      if (!empty($modules['webazt_slider0']["fields"]["img0"])){
                        ?>
                             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <?php
                      }
                      if (!empty($modules['webazt_slider1']["fields"]["img0"])){
                        ?>
                             <li data-target="#myCarousel" data-slide-to="1"></li>
                        <?php
                      }
                      if (!empty($modules['webazt_slider2']["fields"]["img0"])){
                        ?>
                             <li data-target="#myCarousel" data-slide-to="2"></li>
                        <?php
                      }
                      if (!empty($modules['webazt_slider3']["fields"]["img0"])){
                        ?>
                             <li data-target="#myCarousel" data-slide-to="3"></li>
                        <?php
                      }
                      if (!empty($modules['webazt_slider4']["fields"]["img0"])){
                        ?>
                             <li data-target="#myCarousel" data-slide-to="4"></li>
                        <?php
                      }
                      if (!empty($modules['webazt_slider5']["fields"]["img0"])){
                        ?>
                             <li data-target="#myCarousel" data-slide-to="5"></li>
                        <?php
                      }

              }
              
              ?>
    </ol>
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <?php
          if (!empty($_GET["uri"]) and ($_GET["uri"]=="/mycontent" OR $_GET["uri"]=="/mydesign")) {
              ?>
                  <?php require_once("slider/slider-estracto0.php"); ?>
                  <?php require_once("slider/slider-estracto1.php"); ?>
                  <?php require_once("slider/slider-estracto2.php"); ?>
                  <?php require_once("slider/slider-estracto3.php"); ?>
                  <?php require_once("slider/slider-estracto4.php"); ?>
                  <?php require_once("slider/slider-estracto5.php"); ?>
              <?php
          }else{
              if (!empty($modules['webazt_slider0']["fields"]["img0"])) {
                  require_once("slider/slider-estracto0.php"); 
              }
              if (!empty($modules['webazt_slider1']["fields"]["img0"])) {
                  require_once("slider/slider-estracto1.php"); 
              }
              if (!empty($modules['webazt_slider2']["fields"]["img0"])) {
                  require_once("slider/slider-estracto2.php"); 
              }
              if (!empty($modules['webazt_slider3']["fields"]["img0"])) {
                  require_once("slider/slider-estracto3.php"); 
              }
              if (!empty($modules['webazt_slider4']["fields"]["img0"])) {
                  require_once("slider/slider-estracto4.php"); 
              }
              if (!empty($modules['webazt_slider5']["fields"]["img0"])) {
                  require_once("slider/slider-estracto5.php"); 
              }
          }
      ?>      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>