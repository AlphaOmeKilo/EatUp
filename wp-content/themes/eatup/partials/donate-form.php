<form id="contact-form" class="contact-form">
  <input name="action" type="hidden" value="signup_a_school" id="form-action">
  
  <div class="contact-section clearfix">
    
    
    <div class="switch-field col-sm-12">
      <div class="b1 white col-sm-5">Donation amount:</div>
      <div class="switch-field-choices col-sm-7">
        <input type="radio" id="donation_amount_left" name="donation_amount" value="1" checked/>
        <label for="donation_amount_left" class="b1">$1</label>
        <input type="radio" id="donation_amount_center" name="donation_amount" value="10" />
        <label for="donation_amount_center" class="b1">$10</label>
        <input type="radio" id="donation_amount_right" name="donation_amount" value="other" />
        <label for="donation_amount_right" class="b1 othervalue-label active">Other</label>
        <input class="othervalue-text b1" type="text" placeholder="Other"/>
      </div>      
    </div>
    
    <div class="switch-field col-sm-12">
      <div class="col-sm-5">
        <input type="radio" id="donate-once" name="switch_once_or_monthly" value="1" checked/>
        <label for="donate-once" class="b1">One time only</label>
      </div>
      <div class="col-sm-2">
        <div class="b1 white switch-field-divider">or</div>
      </div>
      <div class="col-sm-5">
        <input type="radio" id="donate-subscription" name="switch_once_or_monthly" value="10" />
        <label for="donate-subscription" class="b1">Monthly donation</label>
      </div>
    </div>
    
    <b4 class="b4 white section-label">You’re donating <span id="donation-amount">$0</span>, which is the equivalent of <span id="donation-sandwiches">0</span> sandwiches!</b4>
    
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