(function () {

    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    canvas.width = 1024;
    canvas.height = 400;
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
                // start
                break;
            default:
                change_case = 0;
                break;
        }
    }

});