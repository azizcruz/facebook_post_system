$(document).ready(function(){
    var post_btn    = $("#post-btn"),
        post_text   = $("#post-text");
    
    getPosts();
    
      function getPosts() {
          
          
          $.ajax({
         
          url: "server.php",
          type: "GET"
          
         }).done(function(res){
          
         $("#posts").html(res);
       
        });
          
      }
    
    $("form").submit(function(e){
       
        e.preventDefault();
        
    });
    
    post_btn.on("click", function(){
        
       getPosts(); 
        
    });
    
    post_text.on("keyup", function(){
       
        if(post_text.val() != "") {
            
            post_btn.removeAttr("disabled");
            
        } else {
            
            post_btn.attr("disabled", "disabled");
            
        }
        
    });
         
  
         
});