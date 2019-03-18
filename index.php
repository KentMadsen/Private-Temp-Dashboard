<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php 
    include "./generic/media.html";
    ?>

    <title>
      Dashboard - Homepage
    </title>
  </head>

  <body>
    <?php 
      include "./generic/header.html";
    ?> 
        
    <main>
      <section class="cover-background">
        <div class="page-boundary"> 
          <div class="cover-clock-boundary">
            <div class="cover-clock">
              <div class="cover-clock-hours"> 
                <div class="align-center-of-height"> 
                  <p class="clock-hours"> 
                    10
                  </p>
                </div>
              </div>
              <div class="cover-clock-minutes"> 
                <div class="align-center-of-height"> 
                  <p class="clock-minutes"> 
                    45
                  </p>
                </div>
              </div>
              <div class="cover-clock-seconds"> 
                <div class="align-center-of-height"> 
                  <p class="clock-seconds"> 
                    60
                  </p>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
    </main>

    <?php 
      include "./generic/footer.html";
    ?> 

    <script src="./js/clock.js"> 
    
    </script>
  </body>

  <?php
    include "./generic/code.html"; 
  ?>
  
</html>