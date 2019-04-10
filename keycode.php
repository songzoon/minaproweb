
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <p id="demo"></p>

    
    <script>
/* In this example, we use a cross-browser solution, because the keyCode property does not work on the onkeypress event in Firefox. However, the which property does.

Explanation of the first line in the function below: if the browser supports event.which, then use event.which, otherwise use event.keyCode */
document.onkeydown = myFunction;
function myFunction(event) {
    
  var x = event.which || event.keyCode;

  var sum = x;

  if ( sum == "8") sum = "BackSpace";
  
        if ( sum == "9") sum = " Tab";
        if ( sum == "13") sum = " Enter ";
        if ( sum == "16") sum = " Ship ";
        if ( sum == "17") sum = " Ctrl ";
        if ( sum == "18") sum = " Alt ";
        if ( sum == "20") sum = " CapsLk ";
        if ( sum == "32") sum = " Space ";

        if ( sum == "37") sum = " Left ";
        if ( sum == "38") sum = " Up ";
        if ( sum == "39") sum = " Right ";
        if ( sum == "40") sum = " Down ";
        
        //if ( sum == "46") sum = "Delete";

        if ( sum == "48") sum = "0";
        if ( sum == "49") sum = "1";
        if ( sum == "50") sum = "2";
        if ( sum == "51") sum = "3";
        if ( sum == "52") sum = "4";
        if ( sum == "53") sum = "5";
        if ( sum == "54") sum = "6";
        if ( sum == "55") sum = "7";
        if ( sum == "56") sum = "8";
        if ( sum == "57") sum = "9";

        if ( sum == "65") sum = "A";
        if ( sum == "66") sum = "B";
        if ( sum == "67") sum = "C";
        if ( sum == "68") sum = "D";
        if ( sum == "69") sum = "E";
        if ( sum == "70") sum = "F";
        if ( sum == "71") sum = "G";
        if ( sum == "72") sum = "H";
        if ( sum == "73") sum = "I";
        if ( sum == "74") sum = "J";
        if ( sum == "75") sum = "K";
        if ( sum == "76") sum = "L";
        if ( sum == "77") sum = "M";
        if ( sum == "78") sum = "N";
        if ( sum == "79") sum = "O";
        if ( sum == "80") sum = "P";
        if ( sum == "81") sum = "Q";
        if ( sum == "82") sum = "R";
        if ( sum == "83") sum = "S";
        if ( sum == "84") sum = "T";
        if ( sum == "85") sum = "U";
        if ( sum == "86") sum = "V";
        if ( sum == "87") sum = "W";
        if ( sum == "88") sum = "X";
        if ( sum == "89") sum = "Y";
        if ( sum == "90") sum = "Z";
        if ( sum == "91") sum = "START";

        if ( sum == "144") sum = " NumLock ";
        if ( sum == "189") sum = " - ";

  document.getElementById("demo").innerHTML +=  sum;

  
}
</script>
<!--
    <script language="JavaScript">
        document.onkeydown = checkKeycode //กดปุ่มเมื่อไหร่ก็เรียกฟังก์ชั่น checkKeycode เล่ย!
        function checkKeycode(e) {
        var keycode;
        if (window.event) keycode = window.event.keyCode; // ใช้ IE อ่ะ
        else if (e) keycode = e.which; // ใช้ Firefox เน่าะ
        var sum = keycode;
        var txt = "";

        if ( sum == "8") sum = "BackSpace";
        if ( sum == "9") sum = "Tab";
        if ( sum == "13") sum = "Enter";
        if ( sum == "16") sum = "Ship";
        if ( sum == "17") sum = "Ctrl";
        if ( sum == "18") sum = "Alt";
        if ( sum == "20") sum = "CapsLk";
        if ( sum == "32") sum = "Space";

        if ( sum == "37") sum = "Left";
        if ( sum == "38") sum = "Up";
        if ( sum == "39") sum = "Right";
        if ( sum == "40") sum = "Down";
        
        //if ( sum == "46") sum = "Delete";

        if ( sum == "48") sum = "0";
        if ( sum == "49") sum = "1";
        if ( sum == "50") sum = "2";
        if ( sum == "51") sum = "3";
        if ( sum == "52") sum = "4";
        if ( sum == "53") sum = "5";
        if ( sum == "54") sum = "6";
        if ( sum == "55") sum = "7";
        if ( sum == "56") sum = "8";
        if ( sum == "57") sum = "9";

        if ( sum == "65") sum = "A";
        if ( sum == "66") sum = "B";
        if ( sum == "67") sum = "C";
        if ( sum == "68") sum = "D";
        if ( sum == "69") sum = "E";
        if ( sum == "70") sum = "F";
        if ( sum == "71") sum = "G";
        if ( sum == "72") sum = "H";
        if ( sum == "73") sum = "I";
        if ( sum == "74") sum = "J";
        if ( sum == "75") sum = "K";
        if ( sum == "76") sum = "L";
        if ( sum == "77") sum = "M";
        if ( sum == "78") sum = "N";
        if ( sum == "79") sum = "O";
        if ( sum == "80") sum = "P";
        if ( sum == "81") sum = "Q";
        if ( sum == "82") sum = "R";
        if ( sum == "83") sum = "S";
        if ( sum == "84") sum = "T";
        if ( sum == "85") sum = "U";
        if ( sum == "86") sum = "V";
        if ( sum == "87") sum = "W";
        if ( sum == "88") sum = "X";
        if ( sum == "89") sum = "Y";
        if ( sum == "90") sum = "Z";
        if ( sum == "91") sum = "START";

        if ( sum == "144") sum = "NumLock";

        
        
    
        document.getElementById("demo").innerHTML = sum;
        //alert("keycode: " + keycode); //เด้ง popup มาดูดิ๊ว่า key code คืออะไร
        }

   
    </script>
    --> 
</body>
</html>



    