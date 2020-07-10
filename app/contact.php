<?php include './include/header.php';
  $isPost = ($_SERVER['REQUEST_METHOD'] === 'POST');
?>

    <main>
      <div id="wrapper">
        <h2 class="body-heading">Contact Me</h2>
        <div id="connect-body">
          <h3 class="item-heading">Shoot me an email...</h3>
          <form id="contact-form" method="post">
            <input id="name-field" type="text" name="name" placeholder="Your name" required><br>
            <input id="email-field" type="email" name="email" placeholder="Email" required><br>
            <input id="subject-field" type="text" name="subject" placeholder="Subject" required><br>
            <textarea id="message-field" name="body" placeholder="Message" rows="10" required></textarea><br>
            <input class="link-button" type="submit" name="submit" value="Send">
          </form><br><br>
          <!--<h3 class="item-heading">Additionally, connect with me using any of the methods below...</h3>
          <ul>
            <li>Connect with me on <a href="" target="_blank" class="body-link">LinkedIn</a></li>
            <li>View my <a href="" target="_blank" class="body-link">GitHub</a></li>
            <li>Send me an email at <a href="" target="_blank" class="body-link">sims.andrew22@gmail.com</a></li>
          </ul>-->
        </div>
      </div>
      <div id="contact-page-overlay" class="<?php echo (!$isPost) ? "overlay-hidden" : "" ?>">
        <div id="contact-page-overlay-panel">
          <div id="contact-page-overlay-message">
            <h3 class="item-heading">Your request was received!</h3>
            <form><input id="btn-close-overlay" class="link-button" type="submit" value="Close" method="get"></form>
            <!--<button onclick="closeOverlay()" id="btn-close-overlay" class="link-button">Close</button>-->
          </div>
        </div>
      </div>
    </main>

<?php include './include/footer.php'; ?>
