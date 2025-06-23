<!--load_file.php-->
<input type="text" id="nm" placeholder="Enter Name">
<button id="btn" onclick="loadData()">LOAD DATA</button>
<p id="res"></p>
<script>
function loadData() {
    nm=document.getElementById("nm").value;
    obj=new XMLHttpRequest();
    
    obj.open("POST","load_data.php");
    obj.send();

    obj.onreadystatechange=function(){
        document.getElementById("res").innerHTML=this.response;
    }
    
}
</script>