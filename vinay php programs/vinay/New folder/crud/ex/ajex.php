<input type="text" id="nm" placeholder="Enter Name"><br>
<button id="btn" onclick="loadData()">Load Data</button>
<p id="res"></p>

<script>
    function loadData() {
       nm = document.getElementById("nm").value;
       obj = new XMLHttpRequest();
       obj.open("POST" , "data.php");
       obj.send();

       obj.onreadystatechange = function(){
        document.getElementById("res").innerHTML = this.response;
       }
    }
    
</script>
