<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Földházi Márton</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
input{
   width: 400px;
padding: 8px;
border: 1px solid #a8a8a8;
border-radius: 5px;
font-size: 18px;
outline: 0;
margin: 50px auto;
display: block;
}


</style>
    
    
    <body>
        <div>
        <h1 style="text-align: center;">Keresés a városok között! (Nevük alapján)</h1>


        <input class="kereses" type="search" id="gsearch" placeholder="Keresés...">
            </div>
        
       
        <table style="max-width: 1200px;margin: 50px auto;">
          
      </table>  
            
    </body>
</html>
<script>
$(document).ready(function() {
    
        kiir("");
  
  
   $(".kereses").keyup(function() {

       var keresettnev = $('.kereses').val();
      
      
           kiir(keresettnev);
     
       
   });
   
   function kiir(nev){
       
           $.post("varosokleker.php",
                {
                    leker: "kereses",               
                    keresnev: nev
                },
                function (data) {
                   $('table').html(data);
               
                });
   }
   
   
});
</script>