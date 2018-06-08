<form id="contact-form" class="contact-form">
  <input name="action" type="hidden" value="signup_a_school" id="form-action">
  
  <div class="contact-section clearfix">
    <b4 class="b4 white section-label">Contact Details</b4>

    <input id="first-name" class="contact-form-field b1 white col-sm-5" type="text" name="first_name" value="" placeholder="Your first name" required>
    <input id="last-name" class="contact-form-field b1 white col-sm-5 col-sm-push-2" type="text" name="last_name" value="" placeholder="Your last name" required>
    <input id="contact-email" class="contact-form-field b1 white col-sm-5"  type="email" name="email" value="" placeholder="Your email" required>
    <input id="contact-no" class="contact-form-field b1 white col-sm-5 col-sm-push-2"  type="text" name="contact_no" value="" placeholder="Contact No." required>
    
    <input id="address" class="contact-form-field b1 white col-sm-5"  type="text" name="address" value="" placeholder="Address" required>
    <input id="suburb" class="contact-form-field b1 white col-sm-5 col-sm-push-2"  type="text" name="suburb" value="" placeholder="Contact No." required>
    <input id="state" class="contact-form-field b1 white col-sm-5"  type="text" name="state" value="" placeholder="State" required>
    <input id="postcode" class="contact-form-field b1 white col-sm-5 col-sm-push-2"  type="text" name="postcode" value="" placeholder="Postcode" required>
  </div>
  
  <div class="school-section clearfix">
    <b4 class="b4 white section-label">Payment Method</b4>
  
    <input id="card-number" class="contact-form-field b1 white col-sm-12" type="text" name="card_number" value="" placeholder="Card number" required>
    <input id="expiry-date" class="contact-form-field b1 white col-sm-5"  type="text" name="expiry_date" value="" placeholder="Expiry date" required>
    <input id="cvv" class="contact-form-field b1 white col-sm-5 col-sm-push-2" type="text" name="cvv" value="" placeholder="CVV" required>
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