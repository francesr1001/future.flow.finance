
    <script>
    // JavaScript code to handle the image click event
    var image = document.getElementById("image");
    var isRed = false;

    image.addEventListener("click", function() {
      if (isRed) {
        changeBackgroundColor("white");
        isRed = false;
      } else {
        changeBackgroundColor("DarkSlateGrey ");
        //https://www.w3schools.com/colors/colors_groups.asp
        //sample color here
        isRed = true;
      }
    });

    // AJAX function to call the PHP script
    function changeBackgroundColor(color) {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "change_background.php?color=" + color, true);
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.body.style.backgroundColor = color;
        }
      };
      xhr.send();
    }
    </script>