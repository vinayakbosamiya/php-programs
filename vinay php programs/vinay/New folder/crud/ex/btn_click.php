<!--btn_click.php-->
<input type="text" id="name">
<button id="btn">CLICK</button>
<p id="res"></p>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $("#btn").click(function() {
            nm = $("#name").val();
            $("#res").text(nm);
        })
    });
</script>