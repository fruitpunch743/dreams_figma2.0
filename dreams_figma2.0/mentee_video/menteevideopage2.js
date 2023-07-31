const topicButtons = document.querySelectorAll(".topic-button");
var nexttopicbutton=document.querySelector(".additional_button");

let current;
let topicvalue;
var topicValue;
let len=0;
//topicButtons.style.backgroundColor='white';
topicButtons.forEach(button => {
    button.addEventListener("click", handleTopicButtonClick);
  });
  function handleTopicButtonClick(event) {
    // Get the topic specific to the clicked button
    const arr=["topic1","topic2","topic3","topic4","topic5","topic6","topic7","topic8"];
    nexttopicbutton.style.display='none';
    btn.style.display='block';

    topicValue = event.target.dataset.topic;  
    console.log(topicValue);
    for(let y=0;y<arr.length;y++)
    {
    if((topicValue.localeCompare(arr[y]))==0)
    {
      console.log("hello");
      var buttons = document.querySelector('[data-topic="' + topicValue + '"]');
      buttons.style.backgroundColor = 'lightgreen';
      console.log("its reaching somewhwe");
    }
    else
    {
      var buttons = document.querySelector('[data-topic="' + arr[y] + '"]');
      buttons.style.backgroundColor = 'white';
    }
  }

    let topicno;
    let camefrom = 1;
    
    let year=3;

  switch (topicValue) {
    case "topic1":
      current=0;
        topicno = 1;
        topicvalue=topicValue;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
    case "topic2":
      current=0;
      topicvalue=topicValue;
        topicno = 2;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
    case "topic3":
      current=0;
      topicvalue=topicValue;
        topicno = 3;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
      case "topic4":
        current=0;
        topicvalue=topicValue;
        topicno = 4;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
      case "topic5":
        current=0;
        topicvalue=topicValue;
        topicno = 5;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
      case "topic6":
        current=0;
        topicvalue=topicValue;
        topicno = 6;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
      case "topic7":
        current=0;
        topicvalue=topicValue;
        topicno = 7;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
      case "topic8":
        current=0;
        topicvalue=topicValue;
        topicno = 8;
        minorchanges();
        getVideo(year,topicno,camefrom,current);
      break;
  }
} 
function minorchanges()
{
  var checkTick = document.querySelector(".checkbox_video");
  var label=document.querySelector(".completed_label");
  checkTick.style.display = 'none';
  label.style.display = 'none';
  var btn=document.querySelector(".next_button");
  btn.disabled=false;
}

function getVideo(year, topicno,camefrom,current) {
  console.log(current);
  var xhr = new XMLHttpRequest();

  xhr.open("GET", "menteevideopage.php?year=" + encodeURIComponent(year) + "&topicno=" + encodeURIComponent(topicno), true);

  xhr.onload = function() {
    if (xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      console.log("Response:", response);
      var videoUrls= response.videoUrls;
      console.log(videoUrls);
      urls=videoUrls;
      len=urls.length;
      console.log(len);
      // Call the function to display the video or perform any other necessary tasks
      console.log("should work");
      if(camefrom==1)
      {
        var label1= document.getElementById("tracker");
    label1.textContent = (current+1) + "/" + len;
      }
      displayVideo(urls,current);
    } else {
      console.error("Request failed with status code " + xhr.status);
    }
  };

  xhr.send();
}

function displayVideo(urls,current) {
  // Use the video URL as needed (e.g., assign it to a video element)
  var vid = document.querySelector(".r1");
  console.log("works");
  console.log(current);
  vid.src = urls[current];
  //checking();
}

function checking()
{
var xhrs = new XMLHttpRequest();
console.log(topicvalue);
// Prepare the AJAX request
//var url = "get_completed.php?topicvalue=" + encodeURIComponent(topicvalue + '_');
//console.log("URL:", url);
xhrs.open("GET", "get_completed.php?topicvalue=" + encodeURIComponent(topicvalue), true);
console.log(topicvalue);
console.log("checking()");

// Set the onload callback function
xhrs.onload = function() {
    console.log("checking()");
  if (xhrs.status === 200) {
    // Request was successful
    var response = JSON.parse(xhrs.responseText);
    var completedValue = response.completed;
    console.log(xhrs.responseText)
    console.log("Completed value:", completedValue);
checkTick.checked = (completedValue == 1) ? true : false;
if(checkTick.checked==true)
{
  var label = document.querySelector('.completed_label');

// Change the contents of the label
label.innerHTML = 'Topic completed!';

}
else{
  var label = document.querySelector('.completed_label');

  // Change the contents of the label
  label.innerHTML = 'Mark as completed';

}
  }
  
}
xhrs.send();
}


var checkTick = document.querySelector(".checkbox_video");
var xhrm = new XMLHttpRequest();

checkTick.addEventListener("change", function() {
  var completedValue = checkTick.checked ? 1 : 0; // 1 if checked, 0 if unchecked

  // Create an XMLHttpRequest object

  // Prepare the AJAX request
  xhrm.open("GET", "update_completed.php?topicvalue=" + encodeURIComponent(topicvalue) + "&completed=" + encodeURIComponent(completedValue), true);

  // Set the onload callback function
  xhrm.onload = function() {
    if (xhrm.status === 200) {
      // Request was successful
      console.log("Completed status updated successfully.");

      // Load and execute the JavaScript file after successful updation
      var scriptElement = document.createElement('script');
      scriptElement.src = 'svg.js'; // Replace with the actual path to your JS file
      document.head.appendChild(scriptElement);
    } else {
      // Request failed
      console.error("Request failed with status code " + xhrm.status);
    }
  };

  // Send the AJAX request
  xhrm.send();
});


var checkTick = document.querySelector(".checkbox_video");
var label=document.querySelector(".completed_label");
checkTick.style.display = 'none';
label.style.display = 'none';

var btn=document.querySelector(".next_button");
    btn.disabled=false;
    btn.addEventListener("click",function(event)
{
  event.preventDefault();
    current=current+1;
    if(current<len)
    {
    console.log(current);
    var label1= document.getElementById("tracker");
    label1.textContent = (current+1) + "/" + len;
    displayVideo(urls,current);
    //var bt=document.querySelector(".additional_button");
    nexttopicbutton.style.display='none';
   
    }
    else{
      checkTick = document.querySelector(".checkbox_video");
      checkTick.style.display = 'block';
      label.style.display = 'block';
      var btn=document.querySelector(".next_button");
    btn.style.display='none';
      console.log("completed");
      checking();
      //var bt=document.querySelector(".additional_button");
      if(topicValue!='topic8')
      {
    nexttopicbutton.style.display='block';
    
      }
      
    }


})

nexttopicbutton.addEventListener("click", handleNextTopicButtonClick);

function handleNextTopicButtonClick(event) {
  event.preventDefault();


  var modifiedString = topicValue.replace(/\d+/, function(match) {
    var number = parseInt(match); // Convert the matched number to an integer
    var increasedNumber = number + 1; // Increase the number by 1
    return increasedNumber.toString(); // Convert the increased number back to a string
  });
  
  console.log(modifiedString);

  var buttons = document.querySelectorAll('[data-topic="' + modifiedString + '"]');
  
// Trigger the click event for each matched button
buttons.forEach(function(button) {
  button.click();
});
nexttopicbutton.style.display='none';

  //topicButtons.click()

}










