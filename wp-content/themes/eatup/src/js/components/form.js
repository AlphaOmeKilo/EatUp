eu.form = eu.form || {};

eu.form.init = function() {

  function initEmailFormListener() {
    $("#contact-form").submit(function(e) {
      e.preventDefault();
      
      var height = $(this).height();

      var $emailForm = $(this);
      $emailForm.find('input[type=submit]').prop('disabled', true);
      $emailForm.find('input[type=submit]').addClass('active');

      $.ajax({
        url  : post_url,
        type : 'post',
        data : $emailForm.serialize(),
        success: function(response) {
          $responseParsed = jQuery.parseJSON( response );
          if($responseParsed.error) {
            $(".form-response").text($responseParsed.error);
            $emailForm.find('input[type=submit]').prop('disabled', false);
            $emailForm.find('input[type=submit]').removeClass('active');
          } else {
            $emailForm.hide();
            $(".form-response-container").height(height);
            $(".form-response").text($responseParsed.success);
          }
        },
        error: function(err) {
          $emailForm.find('input[type=submit]').prop('disabled', false);
          $emailForm.find('input[type=submit]').removeClass('active');
          $(".form-response").text(err);
        }
      });

      return false;
    });
  }
  
  function setCursorToEnd() {
    this.focus();
    var $thisVal = this.val();
    this.val('').val($thisVal);
    return this;
  }
  
  //ENTER OTHER DONATION AMOUNT
  $('#donation_amount_right').on('click', function() {
    $(this).next().removeClass('active');
    $(this).next().next().text('$');
    
    value = $(this).next().next().val();        
    $(this).next().next().addClass('active').focus().val('').val(value); 
  });
  
  $('.othervalue-text').focusout(function() {
    $defaultValue = "Other";
    
    $(this).removeClass('active');
    $(this).prev().addClass('active');
    if($(this).val().substring(0,1) == "$") {
      $(this).prev().html($(this).val());
      $("#donation_amount_right").attr("value", $(this).val());
    } else {
      $(this).prev().html("$" + $(this).val());
      $("#donation_amount_right").attr("value", $(this).val());
    }
    
    calculateDonation();
    
    if ($(this).prev().html() == "$") {
      $(this).prev().html($defaultValue);
      $("#donation_amount_right").attr("value", $defaultValue);
    }
  });
  
  
  //sandwiches calculations
  function calculateDonation() {
    selValue = $('input[name=donation_amount]:checked').val();
    if(selValue) {
      if(selValue == "$") {
        $('#donation-amount').text("$0");
        $('#donation-lunches').text("0");
      } else if(selValue.substring(0,1) == "$") {
        $('#donation-amount').text(selValue);
        $('#donation-lunches').text(selValue.substring(1));
      } else {
        $('#donation-amount').text("$" + selValue);
        $('#donation-lunches').text(selValue);
      }
    }
  }
  
  $('.switch-field-choices input').on('click', function() {
    calculateDonation();
  });
  
  if(isMobile()) {
    $('#donation_amount_left').remove();
    $('#donation_amount_left_label').remove();
    $('#donation_amount_center').remove();
    $('#donation_amount_center').remove();
    $('#donation_amount_center_label').remove();
  }
  

  initEmailFormListener();
  calculateDonation();
}