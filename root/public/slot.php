<?php
    include_once ("tamplates/header.php");
?>
<div class="section-canvas">
    <h3 class="flex-center title">Slot Machine</h3>
    <form action="" class="flex-center">
        <input class="input-text" type="text" placeholder="username" name="username">
        <input class="input-text" type="text" placeholder="trade-link" name="trade-link">
    </form>
    <div class="flex-center">
        <canvas id="canvas"></canvas>
    </div>
</div>
<?php
include_once ("tamplates/foot.php");
include_once ("../app/canvas_calculatations/canvas_Manerger.php")
?>
