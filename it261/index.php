<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href='css/portal.css' rel='stylesheet' type='text/css'/>
<title>Portal Page</title>

</head>

<body>
<div class="header">
    <header>
        
        <nav>
            <ul >
<li><a href="https://kaciecodes.com/it261/index.php">Home</a></li>
<li><a href="">Switch(HW3)</a></li>
<li><a href="">Troubleshooting(HW4)</a></li>
<li><a href="">CalcForm(HW5)</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
            </ul>
        </nav>
        
    </header> 
    </div> <!-- END header -->
<div class="wrapper">
    <div class="container-intro">
        
          <h1>Welcome to my IT261 Portal Page</h1>

        <div id="col-1">
        <img class="bio-pic" src="images/me.jpeg" alt="Kacie in Japan">
        </div> <!--END col-1-->

        <div id="col-2">
        <h2>About Me</h2>
           <p class="about">Hello! My name is Kacie and I am a web development student at Seattle Central
        college. I am enrolled in the certificate program and currently in
        my second quarter. I'm transitioning out of the restaurant industry and excited to be learning something new.
        I'm a Seattle native and have lived in Lake City, Capital Hill, Green Lake, and
        Alki Beach. Most of the time, you can find me at home with
        my 1 year old cat, Moose.
           </p>
        </div> <!--END col-2-->

    </div> <!--END containter-intro-->

<main>
    <h2>Week 1: MAMP</h2>
    <h3>Mamp Setup</h3><a href="https://kaciecodes.com/it261/images/MAMP-localhost.png">LINK TO SCREENSHOT SHOWING LOCALHOST URL</a>
        <img class="screenshot" src="images/MAMPsetup.png" alt="screenshot of MAMP">
   
    <h3>Mamp Error</h3>
    <img class="screenshot" src="images/MAMP-warning.png" alt="screenshot of MAMP">    
</main> 
    
    <aside>
    
     <h2>Weekly Class Exercises</h2>
     <dl>  
        <dt>Week 1</dt>
            <dd><a href="https://kaciecodes.com/it261/website/index.html">Website</a></dd>
        <dt>Week 2</dt>
            <dd><a href="https://kaciecodes.com/it261/weeks/week2/var.php">var.php</a></dd>
            <dd><a href="https://kaciecodes.com/it261/weeks/week2/var2.php">var2.php</a></dd>
            <dd><a href="https://kaciecodes.com/it261/weeks/week2/currency.php">currency.php</a></dd>
            <dd><a href="https://kaciecodes.com/it261/weeks/week2/currency-logic.php">currency-logic.php</a></dd>
            <dd><a href="https://kaciecodes.com/it261/weeks/week2/heredoc.php">heredoc.php</a></dd>  
        <dt>Week 3</dt>
            <dd><a href="">In progress</a></dd>
            <dd><a href="">In progress</a></dd>
        <dt>Week 4</dt>
            <dd><a href="">Coming Soon</a></dd>
            <dd><a href="">In progress</a></dd>
        <dt>Week 5</dt>
            <dd><a href="">Coming Soon</a></dd>
            <dd><a href="">In progress</a></dd>
        <dt>Week 6</dt>
            <dd><a href="">In progress</a></dd>
     </dl>
    
</aside>


<footer>
      <p><small>&copy; 2020-<?=date("Y")?> by 
          <a href="">Kacie Nielsen</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">Check CSS</a></small>
     </p>
    </footer>

            
   <script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
     
     //manages mobile nav 
     function myFunction() {
         var x = document.getElementById("myTopnav");
         if (x.className === "topnav") {
             x.className += " responsive";
         } else {
             x.className = "topnav";
         }
     }   
  </script>


    
    </div> <!--END wrapper-->
</body>
</html>
    

  