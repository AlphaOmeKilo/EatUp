<form id="contact-form" class="contact-form">
  <input name="action" type="hidden" value="donate" id="form-action">
  
  <div class="contact-section clearfix">
    
    
    <div class="switch-field col-sm-12">
      <div class="b1 white col-md-5 col-sm-4 text">Donation amount:</div>
      <div class="switch-field-choices col-md-7 col-sm-8">
        <input type="radio" id="donation_amount_left" name="donation_amount" value="1"/>
        <label for="donation_amount_left" id="donation_amount_left_label" class="b1">$1</label>
        <input type="radio" id="donation_amount_center" name="donation_amount" value="10" />
        <label for="donation_amount_center" id="donation_amount_center_label" class="b1">$10</label>
        <input type="radio" id="donation_amount_right" name="donation_amount" value="0"/>
        <label for="donation_amount_right" class="b1 othervalue-label active">Other</label>
        <input class="othervalue-text b1" type="text" placeholder=""/>
      </div>      
    </div>
    
    <div class="switch-field col-sm-12 flex-start">
      <div class="switch-field-monthly col-xs-12">
        <input type="radio" id="donate-once" name="monthly" value="0" checked/>
        <label for="donate-once" class="b1 monthly-label">One time only</label>
      </div>
      <div class="switch-field-monthly col-xs-12">
        <div class="b1 white switch-field-divider">or</div>
      </div>
      <div class="switch-field-monthly col-xs-12">
        <input type="radio" id="donate-subscription" name="monthly" value="1" />
        <label for="donate-subscription" class="b1 monthly-label">Monthly donation</label>
      </div>
    </div>
    
    <b4 class="b4 white section-label section-label-value">You’re donating $<span id="donation-amount">1</span>, which is the equivalent of <span id="donation-lunches">0</span> lunches!</b4>
    
    <b4 class="b4 white section-label">Contact Details</b4>

    <input id="first-name" class="contact-form-field b1 white col-sm-5 col-xs-12" type="text" name="first_name" value="" placeholder="Your first name" required>
    <input id="last-name" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12" type="text" name="last_name" value="" placeholder="Your last name" required>
    <input id="contact-email" class="contact-form-field b1 white col-sm-5 col-xs-12"  type="email" name="email" value="" placeholder="Your email" required>
    <input id="contact-no" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12"  type="text" name="contact_no" value="" placeholder="Contact No." required>
    
    <input id="address" class="contact-form-field b1 white col-sm-5 col-xs-12"  type="text" name="address" value="" placeholder="Address" required>
    <input id="suburb" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12"  type="text" name="suburb" value="" placeholder="Suburb" required>
    <input id="state" class="contact-form-field b1 white col-sm-5 col-xs-12"  type="text" name="state" value="" placeholder="State" required>
    <input id="postcode" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12"  type="text" name="postcode" value="" placeholder="Postcode" required>
  </div>
  
  <div class="school-section clearfix">
    <b4 class="b4 white section-label">Payment Method</b4>
  
    <input id="card-number" class="contact-form-field b1 white col-sm-12 col-xs-12" type="text" name="card_number" value="" placeholder="Card number" required>
    <input id="expiry-date" class="contact-form-field b1 white col-sm-5 col-xs-12"  type="text" name="expiry_date" value="" placeholder="Expiry date (MM/YY)" required>
    <input id="cvv" class="contact-form-field b1 white col-sm-5 col-sm-push-2 col-xs-12" name="cvv" value="" placeholder="CVV" required>
  </div>
  
  <div class="col-sm-12 form-footer">
    <div class="newsletter col-sm-8 col-xs-12">
      <b2 class="b2 white newsletter-text">I agree to receiving a newsletter from Eat Up</b2>
      <input id="checkBox" type="checkbox" name="checkbox" value="1" class="newsletter-checkbox">
    </div>
    <input class="btn btn-deep-green-invert col-sm-3" type="submit" value="Submit">
  </div>
  
</form>

<div class="form-response-container">
  <b1 class="b1 grey form-response"></b1>
</div>