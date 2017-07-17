<?php
    include_once ("tamplates/header.php");
?>
<div id='overlay' class='overlay' onclick="closeLogin()"></div>
<div id="id01" class="modal">
    <h2 id="winSkinTitle"></h2>
    <p id="winSkinSub"></p>
</div>
<div class="section-canvas main-content">
    <h3 class="flex-center title">Slot Machine</h3>
    <p class="flex-center error" id="error_p"></p>
    <form action="" class="flex-center">
        <input id="username" class="input-text" type="text" placeholder="username" name="username">
        <input id="trade-link" class="input-text" type="text" placeholder="trade-link" name="trade-link">
    </form>
    <div class="flex-center">
        <canvas id="canvas"></canvas>
    </div>
    <div class="flex-center">
        <canvas id="canvas2"></canvas>
    </div>
</div>
<?php
include_once ("tamplates/foot.php");
include_once ("../app/canvas_calculatations/canvas_Manerger.php");
?>
<script src="javascript/canvas.js"></script>
<script src="javascript/canvas2.js"></script>
<script src="javascript/animatie.js"></script>
<script src="javascript/login.js"></script>
