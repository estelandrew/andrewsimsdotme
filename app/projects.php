<?php include './include/header.php'; ?>

    <main class="relative">
      <div id="wrapper">
        <h2 class="body-heading">Projects</h2>
        <div class="body-grid-projects body-grid-projects--projects-page card">
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
        <div class="body-grid-projects project-not-first project-last">
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
      </div>
    </main>

<?php include './include/footer.php'; ?>
