<script>
        var btnElement = document.getElementById("btn-el") ; 
        var inputElement = document.getElementById("input-el") ; 
        var paragElement = document.getElementById("parag-el") ; 

        function greetPerson(){ 
            btnElement.style.display = "none" ; 
            inputElement.style.display = "none" ; 

            paragElement.innerHTML = "Kamusta ang buhay, " + inputElement.value  ; 
            paragElement.style.display = "inline" ;  
        }
    </script>
</body>
</html>