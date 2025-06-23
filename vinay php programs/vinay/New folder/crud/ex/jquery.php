<!-- <input id="name"> -->
<p id="res">fasdfasdfasdf</p>
<!-- <button id="h">hide</button>
<button id="s">show</button> -->
<button id="hs">hide / show</button>
<script src = "../JQuery.js"></script>
<script>
    $(document).ready(function() {
        // $("#h").click(function(){
        //     $("#res").hide();
        // })
        // $("#s").click(function(){
        //     $("#res").show();
        // })
        $("#hs").click(function(){
            $("#res").toggle();
        })
    });
    // $(document).ready(function() {
    //     $("#btn").click(function(){
    //         nm = $("#name").val();
    //         $("#res").text(nm);
    //     })
        
    // });
</script>