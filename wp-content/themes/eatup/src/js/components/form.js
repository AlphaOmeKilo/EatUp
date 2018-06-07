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
          $emailForm.hide();
          $(".form-response-container").height(height);
          $(".form-response").text(response);
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
  
  initEmailFormListener();
}