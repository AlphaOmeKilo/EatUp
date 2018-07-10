<form id="contact-form" class="contact-form">
  <input name="action" type="hidden" value="lets_talk_contact" id="form-action">

  <input id="first-name" class="contact-form-field b1 white col-sm-5 col-xs-12" type="text" name="first_name" value="" placeholder="Your first name" required>
  <input id="last-name" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12" type="text" name="last_name" value="" placeholder="Your last name" required>
  <input id="contact-email" class="contact-form-field b1 white col-sm-5 col-xs-12"  type="email" name="email" value="" placeholder="Your email" required>
  <input id="contact-no" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12"  type="text" name="contact_no" value="" placeholder="Contact No." required>
  <label for="#contact-message" class="b1 white message-label">Your Message</label>
  <textarea id="contact-message" class="b1 white" name="message" rows="8" cols="80" placeholder="" required></textarea>
  
  <div class="form-footer">
    <div class="newsletter">
      <label for="checkBox" class="b2 white newsletter-text">I agree to receiving a newsletter from Eat Up</label>
      <input id="checkBox" type="checkbox" name="checkbox" value="1" class="newsletter-checkbox">
    </div>
    <div class="btn-container">
      <input class="btn btn-light-green-invert col-sm-3" type="submit" value="Submit">
    </div>
  </div>
  
</form>

<div class="form-response-container">
  <b1 class="b1 grey form-response"></b1>
</div>
