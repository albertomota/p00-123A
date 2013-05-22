jQuery(document).ready(function($) {
  // Countdown 
  if($('.countDown').length){
    var liftoffTime = new Date();
  
    $('.countDown').countdown({
        until: new Date(2013, 7 - 1, 30), 
        format: 'd',
        layout: '<span class="date">JULY 2013</span><span class="day first">{d10}<em></em></span><span class="day">{d1}<em></em></span> <span class="deaysUntil">{desc}</span>', 
        description: 'days until the summit'    
        });
  }
  // Weather
    $('#weather').weatherfeed(['CIXX0020']);
    
  // Youtube front page player
  if($('.page-frontpage').length){
      $('a[href*="youtu"]').each(function() {
        /*youtube ID*/
          var urlYoutube = $(this).attr('href');
          var videoid = urlYoutube.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/); 
          
            if(videoid != null) {
                //console.log("video id = ",videoid[1]);
                var videoid = videoid[1];

                /*Click event*/
                $(this).click(function(){
                //console.log('succes');
                
                $("div.videoBlock div.view-content div.field-content").html('<iframe width="232" height="174" src="http://www.youtube.com/embed/'+videoid+'" frameborder="0" allowfullscreen></iframe>');
                return false;            
                });                    
                
            } else { 
                console.log("The youtube url is not valid.");
            } 
            

            
             
      });
  };
  
    //File icons
    $('img[src~="/innovsummit/modules/file/icons/application-pdf.png"]').attr('src','http://localhost/innovsummit/sites/all/themes/innovsummit/_images/pdf.png');
    $('img[src~="/innovsummit/modules/file/icons/x-office-document.png"]').attr('src','http://localhost/innovsummit/sites/all/themes/innovsummit/_images/docx.png');
});