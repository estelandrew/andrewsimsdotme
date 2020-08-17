<?php include './include/header.php'; ?>    

    <main>
      <div id="wrapper">
        <div class="body-grid-welcome">
          <div class="body-grid-welcome-item-1">
            <img class="welcome-headshot" src="images/welcome-headershot.png" alt="Welcome headshot photo"/>
          </div>
          <div class="body-grid-welcome-item-2">
            <div class="welcome-text-container">Hi! My name is <span class="highlight">Andrew Sims</span>. I'm a web developer located in the Columbus, Ohio area. I specialize in creating modern web applications with responsive designs and delightful user experiences.</div>
          </div>
        </div>

        <h2 class="body-heading">Skills</h2>
        <h3 class="item-heading">Front-End Development</h3>
        <p>I build out visual components of websites and applications as well as integrate them with a database or Content Management System (CMS).
          Using HTML, CSS, JavaScript, and other modern or popular languages, I can create fast, interactive web applications. I have experience working with popular front-end libraries and technologies, such as React, SASS, Bootstrap, SAPUI5, and jQuery. </p>
        <h3 class="item-heading">Back-End Development</h3>
        <p>I have worked with backend technologies including SQL, Node, Express, PHP, and ABAP (from SAP). I have professional experience writing RESTful API’s to create and edit database records. </p>
        <h3 class="item-heading">UI/UX Design</h3>
        <p>User Interface (UI) and User Experience (UX) design involve planning and iterating a site's structure and layout, which is a necessary first step in building any web site or application. I have experience using prototyping and editing tools such as Adobe Photshop and XD for this process.</p>
        <h2 class="body-heading">My Projects</h2>
        <div class="body-grid-projects card">
          <div class="body-grid-projects-item-1">
            <a target="_blank" href="https://andrews-open-trivia.netlify.app"><img src="images/thumbnail_trivia-app.png" alt="Open Trivia app screenshot"/></a>
          </div>
          <div class="body-grid-projects-item-2">
            <div class="project-text-container">
              <h3 class="item-heading">Open Trivia App</h3>
              Built with React, this application uses the Open Trivia DB API to generate trivia questions. The application features various categories and difficulty levels for users to select.<br /><br />
              <div class="flex-container flex-container--project-buttons">
                <div><a class="link-button project-button-1" target="_blank" href="https://andrews-open-trivia.netlify.app">Demo &rarr;</a></div>
                <div><a class="link-button project-button-1" target="_blank" href="https://github.com/estelandrew/open-trivia-app">View at Github &rarr;</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="body-grid-projects card project-not-first">
          <div class="body-grid-projects-item-1">
            <a target="_blank" href="https://monty-hall-problem.netlify.app"><img src="images/thumbnail_monty-hall.png" alt="Monty Hall Problem screenshot"/></a>
          </div>
          <div class="body-grid-projects-item-2">
            <div class="project-text-container">
              <h3 class="item-heading">Monty Hall Problem</h3>
              This is a game that I programmed based on the Monty Hall Problem brain teaser. The player guesses which door the prize behind, and the game tracks how many times a player wins when sticking with their first guess as well as how many times they win after switching their guess when given the opportunity.<br /><br />
              <div class="flex-container flex-container--project-buttons">
                <div><a class="link-button project-button-1" target="_blank" href="https://monty-hall-problem.netlify.app">Demo &rarr;</a></div>
                <div><a class="link-button project-button-1" target="_blank" href="https://github.com/estelandrew/monty-hall-problem">View at Github &rarr;</a></div>
              </div>
            </div>
          </div>
        </div>
        <div id="home-page-contact-container">
          <p id="cta-line">Interested in working together or just want to say hello?<br>
                          <span style="font-size:.95rem;">Send me an email below.</span></p>
          <?php include './include/contactForm.php';?>
        </div>
      </div>    
      <?php include './include/successOverlay.php'; ?>  
    </main>
    <script>jumpToFormIfInvalid();</script>

<?php include './include/footer.php'; ?>
