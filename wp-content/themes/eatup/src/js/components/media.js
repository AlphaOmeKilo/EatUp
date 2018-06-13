eu.media = eu.media || {};

eu.media.init = function() {
  
  $('.see-more').on('click', function(e){
    e.preventDefault();

    var link = $(this).children('a').attr('href');
    
    console.log(link);
    $('.see-more').html('<span>Loading More Posts...</span>');

    $.get(link, function(data) {
      var post = $(".post-container .post ", data);
      
      console.log(post);
      $('.post-container').append(post);
    });
    

    $('.see-more').load(link+' .see-more a');
    
    var newlink = $(this).children('a').attr('href');
    
    if (!isDefined(newlink)) {
      $('.see-more').hide();
    }

  });
  
}