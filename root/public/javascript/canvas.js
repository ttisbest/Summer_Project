(function () {

    console.log("ello");

    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    canvas.width = 1024;
    canvas.height = 700;
    var cHeight = canvas.height;
    var cWidth = canvas.width;

    var change_case = 0;

    function change() {
        switch (change_case){
            case 0:
                // reset
                change_case = 1;
                break;
            case 1:
                // start / set up
                break;
            case 2:
                // wait on click and controle input form and set the back and in motion
                break;
            case 3:
                // turning till response and than stop
                break;
            default:
                change_case = 0;
                break;
        }
    }

})();