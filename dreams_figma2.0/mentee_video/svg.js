var topicArray = [];
getrecords();

function getrecords() {
  var xhr = new XMLHttpRequest();
  console.log("its coming");
  xhr.open("GET", "svgshow.php", true);

  xhr.onload = function() {
    if (xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      console.log("Response:", response);

      // Check if the response is an array with at least one element
      if (Array.isArray(response) && response.length > 0) {
        var videoData = response[0];

        // Extract the values of topic1 to topic8 and store them in the array
        for (var i = 1; i <= 8; i++) {
          var topicKey = "topic" + i;
          var topicValue = videoData[topicKey];
          topicArray.push(topicValue);
        }

        console.log("Topic Array:", topicArray);

        // Call showSVG function after retrieving records
        showSVG();
      } else {
        console.error("Invalid or empty response.");
      }
    } else {
      console.error("Request failed with status code " + xhr.status);
    }
  };

  xhr.send();
}

function showSVG() {
  const svgarr = ["svg1", "svg2", "svg3", "svg4", "svg5", "svg6", "svg7", "svg8"];
  console.log(topicArray);

  // Hide all SVG elements initially
  for (var i = 0; i < svgarr.length; i++) {
    var ssvg = document.querySelector('[id="' + svgarr[i] + '"]');
    ssvg.style.display = "none";
  }

  // Show the SVG element based on the topicArray
  for (var i = 0; i < svgarr.length; i++) {
    if (topicArray[i] === "1") {
      var ssvg = document.querySelector('[id="' + svgarr[i] + '"]');
      ssvg.style.display = "block";
    }
  }
}
