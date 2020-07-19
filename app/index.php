<?php include './include/header.php'; ?>    

    <main>
      <div id="wrapper">
        <div class="body-grid-welcome">
          <div class="body-grid-welcome-item-1">
            <img class="welcome-headshot" src="images/welcome-headershot.png" />
          </div>
          <div class="body-grid-welcome-item-2">
            <div class="welcome-text-container">Hi! My name is <span class="highlight">Andrew Sims</span>. I'm a web developer located in the Columbus, Ohio area. I specialize in creating modern web applications with responsive designs and delightful user experiences.</div>
          </div>
        </div>

        <h2 class="body-heading">Skills</h2>
        <h3 class="item-heading">Front-End Development</h3>
        <p>I build out visual components of websites and applications as well as integrate them with a database or Content Management System (CMS). Using HTML, CSS, JavaScript, and other modern or popular languages, I can create fast, interactive web applications.</p>
        <h3 class="item-heading">Back-End Development</h3>
        <p>While I consider myself more of a front-end developer, I do have experience creating back-end databases and writing RESTful API’s to perform CRUD operations on database records.</p>
        <h3 class="item-heading">Wordpress</h3>
        <p>Wordpress is a powerful, open source CMS which, according to their website, is used by about 35% of the web. I have experience developing custom Wordpress sites, including building visual themes from scratch.</p>
        <h3 class="item-heading">UI/UX Design</h3>
        <p>User Interface (UI) and User Experience (UX) design involve planning and iterating a site's structure and layout, which is a necessary first step in building any web site or application. I have experience using prototyping tools such as Adobe XD for this process.</p>
        <h2 class="body-heading">My Projects</h2>
        <div class="body-grid-projects card">
          <div class="body-grid-projects-item-1">
            <img src="images/thumbnail_monty-hall.png" />
          </div>
          <div class="body-grid-projects-item-2">
            <div class="project-text-container">
              <h3 class="item-heading">Monty Hall Problem</h3>
              This is a game that I programmed based on the Monty Hall Problem brain teaser. The player guesses which door the prize behind, and the game tracks how many times a player wins when sticking with their first guess as well as how many times they win after switching their guess when given the opportunity.<br /><br />
              <a class="link-button" target="_blank" href="https://codepen.io/andrew_estel/full/XWXmwPQ">View at Codepen &rarr;</a><br />
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
