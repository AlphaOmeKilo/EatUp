<form id="contact-form" class="contact-form">
  <input name="action" type="hidden" value="help_us_out" id="form-action">
  
  <div class="radio-group">
    <div class="col-sm-3 col-xs-4 col-xs-push-1">
      <b1 class="b1 white you-are">You are a :</b1>
    </div>
    <div class="col-sm-9 col-xs-7 col-xs-push-1 radio-group-choices">
      <div class="radio-container">
        <input type="radio" class="radio" name="help-type" value="single volunteer" id="opt-a">
        <label for="opt-a" class="b1 white radio-text">Single volunteer</label>
        <input type="radio" class="radio" name="help-type" value="community group" id="opt-b">
        <label for="opt-b" class="b1 white radio-text">Community group</label>
      </div>

      <div class="radio-container">
        <input type="radio" class="radio" name="help-type" value="corporate group" id="opt-c">
        <label for="opt-c" class="b1 white radio-text">Corporate Group</label>
        <input type="radio" class="radio" name="help-type" value="school" id="opt-d">
        <label for="opt-d" class="b1 white radio-text">School</label>
      </div>

    </div>
  </div>
  

  <input id="first-name" class="contact-form-field b1 white col-sm-5 col-xs-12" type="text" name="first_name" value="" placeholder="Your first name" required>
  <input id="last-name" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12" type="text" name="last_name" value="" placeholder="Your last name" required>
  <input id="contact-email" class="contact-form-field b1 white col-sm-5 col-xs-12"  type="email" name="email" value="" placeholder="Your email" required>
  <input id="contact-no" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12"  type="text" name="contact_no" value="" placeholder="Contact No." required>
  <label for="#contact-message" class="b1 white message-label">Your Message</label>
  <textarea id="contact-message" class="b1 white" name="message" rows="8" cols="80" placeholder="" required></textarea>
  
  <div class="col-sm-12 form-footer">
    <div class="newsletter col-sm-8 col-xs-12">
      <b2 class="b2 white newsletter-text">I agree to receiving a newsletter from Eat Up</b2>
      <input id="checkBox" type="checkbox" name="checkbox" value="1" class="newsletter-checkbox">
    </div>
    <input class="btn btn-pink-invert col-sm-4" type="submit" value="Submit">
  </div>
  
</form>

<div class="form-response-container">
  <b1 class="b1 grey form-response"></b1>
</div>
