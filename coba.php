<!DOCUMENT>
<html lang="en">
 <head>
 
  <title>Auto Load and Refresh Div Every 10 seconds</title>
 
 
<style>
    #auto_load_div>div{width:100%;max-width:320px;}
  </style>
 
 </head>
 <body>
 
 
<div id="auto_load_div"></div>
 
 
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script>
      function auto_load(){
        $.ajax({
          url: "coba2.php",
          cache: false,
          success: function(data){
             $("#auto_load_div").html(data);
          } 
        });
      }
 
      $(document).ready(function(){
 
        auto_load(); //Call auto_load() function when DOM is Ready
 
      });
 
      //Refresh auto_load() function after 10000 milliseconds
      setInterval(auto_load,10000);
   </script>
 </body>
</html>