<?php include './include/header.php'; ?>
    <main>
      <div id="wrapper">
        <div id="connect-body">        
          <h2 class="body-heading">Contact Me</h2>
          <div id="form-container">                
            <p id="cta-line">Interested in working together or just want to say hello?<br>
            <span style="font-size:.95rem;">Send me a note below.</span></p>
            <?php include './include/contactForm.php' ?>
          </div> 
          <div class="flex-container flex-container--contact-page flex-container--first">
            <div><a href="https://github.com/estelandrew"><img width="32" height="32" src="./images/GitHub-Mark-120px-plus.png" alt="Github logo"></a></div>
            <div>&nbsp;&nbsp;View my <a class="body-link" href="https://github.com/estelandrew">Github</a></div>     
          </div>
          <div class="flex-container flex-container--contact-page">
            <div><a href="https://www.linkedin.com/in/andrew-e-sims/"><img width="32" height="27" src="./images/LI-In-Bug-blue.png" alt="LinkedIn logo"></a></div>
            <div>&nbsp;&nbsp;Connect with me on <a class="body-link" href="https://www.linkedin.com/in/andrew-e-sims/">LinkedIn</a></div>     
          </div>
          <div class="flex-container flex-container--contact-page flex-container--last">
            <div><a href="mailto:andrew@andrewsims.me"><span class="material-icons email-icon">email</span></a></div>
            <div>&nbsp;&nbsp;Email: <a class="body-link" href="mailto:andrew@andrewsims.me">andrew@andrewsims.me</a></div>
          </div>    
        </div>
      </div>
      <?php include './include/successOverlay.php' ?>
    </main>
    <script>jumpToFormIfInvalid();</script>
<?php include './include/footer.php'; ?>
