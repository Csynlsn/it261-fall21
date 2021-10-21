<footer>
    <ul>
        <li>Copyright &copy;
            <?php
            $date_current = date('Y');
            $date_created = 2017;
            if($date_current == $date_created) {
                echo $date_current;
            } else {
                echo '  '.$date_created.' - '.$date_current.' ';
            }
            
                
                ;?>
        </li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="../">Web Design by Kacie</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS Validation</a></li>
    
    </ul>


</footer>

<script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
</script>
    
    </div> <!--END wrapper-->
</body>
</html>