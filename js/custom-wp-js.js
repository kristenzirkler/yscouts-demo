// Main JS File Unminified 
jQuery(function(){
	 // Video Modal
  jQuery('[rel="video-link"]').click(function(event) {
    event.preventDefault();
    var videoID = $(this).attr('data-videoid');
    jQuery('#video-modal').show();
    jQuery('#video-modal iframe').attr('src','//www.youtube.com/embed/'+videoID+'?autoplay=1&autohide=1&modestbranding=1&rel=0&showinfo=0&wmode=transparent');
    jQuery('body').css('overflow','hidden').css('position','relative');
  });
  jQuery('[rel="video-modal-close"]').click(function(event) {
    jQuery('#video-modal').hide();
    jQuery('#video-modal iframe').attr('src','');
    jQuery('body').css('overflow','visible').css('position','static');
  });
});