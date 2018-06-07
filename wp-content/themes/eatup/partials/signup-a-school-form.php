<form id="contact-form" class="contact-form">
  <input name="action" type="hidden" value="signup_a_school" id="form-action">
  
  <div class="contact-section clearfix">
    <b4 class="b4 white section-label">Contact Details</b4>

    <input id="first-name" class="contact-form-field b1 white col-sm-5" type="text" name="first_name" value="" placeholder="Your first name" required>
    <input id="last-name" class="contact-form-field b1 white col-sm-5 col-sm-push-2" type="text" name="last_name" value="" placeholder="Your last name" required>
    <input id="contact-email" class="contact-form-field b1 white col-sm-5"  type="email" name="email" value="" placeholder="Your email" required>
    <input id="contact-no" class="contact-form-field b1 white col-sm-5 col-sm-push-2"  type="text" name="contact_no" value="" placeholder="Contact No." required>
  </div>
  
  <div class="school-section clearfix">
    <b4 class="b4 white section-label">School Details</b4>
  
    <input id="school-name" class="contact-form-field b1 white col-sm-5" type="text" name="school_name" value="" placeholder="School's name" required>
    <input id="school-email" class="contact-form-field b1 white col-sm-5 col-sm-push-2"  type="email" name="school_email" value="" placeholder="School's email" required>
    <input id="contact-person" class="contact-form-field b1 white col-sm-5" type="text" name="contact_person" value="" placeholder="Contact person" required>
    <input id="school-contact-no" class="contact-form-field b1 white col-sm-5 col-sm-push-2" type="text" name="school_contact_no" value="" placeholder="School's contact no." required>
    <input id="school-address" class="contact-form-field b1 white col-sm-5" type="text" name="school_address" value="" placeholder="School's address" required>
    <input id="city" class="contact-form-field b1 white col-sm-5 col-sm-push-2" type="text" name="city" value="" placeholder="City" required>
    <input id="state" class="contact-form-field b1 white col-sm-5"  type="text" name="state" value="" placeholder="State" required>
    <input id="postcode" class="contact-form-field b1 white col-sm-5 col-sm-push-2"  type="text" name="postcode" value="" placeholder="Postcode" required>
  </div>
  
  
  
  
  <label for="#contact-message" class="b1 white message-label">Your Message</label>
  <textarea id="contact-message" class="b1 white" name="message" rows="8" cols="80" placeholder="" required></textarea>
  
  
  <div class="col-sm-12 form-footer">
    <input class="btn btn-deep-green col-sm-3" type="submit" value="Submit">
  </div>
  
</form>

<div class="form-response-container">
  <b1 class="b1 grey form-response"></b1>
</div>
