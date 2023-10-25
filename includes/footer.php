<!-- I moved the footer part into the folder includes -->


<!-- START Footer -->



<footer>
      <p><small>&copy; 2023-<?=date("Y")?> by 
          <a href="contact.php">Edgar Vargas</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
          
          <img src="images/html5.png" alt="HTML 5 logo">
     </p>
    </footer>
<!-- END Footer --> 

</main>
<!-- END WRAPPER -->

<script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
</script>


</body>
</html>


