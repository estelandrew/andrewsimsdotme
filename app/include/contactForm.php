<form id="contact-form" method="post">
<input 
    class="<?php echo ($isPost AND empty($name)) ? "form-field-error" : "" ?>" id="name-field"
    type="text"
    name="name" 
    placeholder="Your name"
    value="<?php echo ($isPost) ? "$name" : ""; ?>"><br>
<input 
    class="<?php echo ($isPost AND (empty($email) OR !$isValidEmail)) ? "form-field-error" : "" ?>" 
    id="email-field" 
    type="email" 
    name="email" 
    placeholder="Email"
    value="<?php echo ($isPost) ? "$email" : ""; ?>"><br>
<textarea 
    class="<?php echo ($isPost AND empty($body)) ? "form-field-error" : "" ?>" 
    id="message-field" 
    name="body" 
    placeholder="Message" rows="10"><?php echo ($isPost) ? "$body" : ""; ?></textarea><br>
<input class="link-button" type="submit" name="submit" value="Send">
</form>
<?php if ($isPost AND !$isValidForm) {        
echo '<ul class="error-list">';    
foreach ($errors as $e) {
    echo "<li>$e</li>";
}
echo '</ul>';
} ?>