<?php
    include_once ("tamplates/header.php");
    include_once ("../app/admin/mMangerer.php");

    $return = getM();
    $min = $return['min'];
    $max = $return['max'];
?>
    <div class="main-content">
        <h2>Admin pannel</h2>
        <div class="content flex-center">
            <div class="left left-line sw5">
                <form action="../app/admin/formHandeler.php" METHOD="post">
                    <p>min : <span id="range1.1"></span></p>
                    <input id="range1" name="r1" type="range" min="1" max="8" value="<?php echo $min;?>" onchange="showValue1(this.value)"/>
                    <p>max : <span id="range2.1"></span></p>
                    <input id="range2" name="r2" type="range" min="3" max="10" value="<?php echo $max;?>" onchange="showValue2(this.value)"/>
                    <input type="submit">
                </form>
            </div>
            <div class="right sw5">
                <p class="add_line"><-- tussen welke ranken je het slot wil laten draaien.</p>
            </div>
        </div>
    </div>
<?php
    include_once ("tamplates/foot.php");
?>
<script type="text/javascript">

    $(document).ready(function () {
        var r1 = $("#range1").val();
        var r2 = $("#range2").val();

        document.getElementById("range1.1").innerHTML=r1;
        document.getElementById("range2.1").innerHTML=r2;

        console.log(r1);
    });
    function showValue1(newValue)
    {
        document.getElementById("range1.1").innerHTML=newValue;
    }
    function showValue2(newValue)
    {
        document.getElementById("range2.1").innerHTML=newValue;
    }
</script>