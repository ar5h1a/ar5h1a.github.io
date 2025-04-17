

function darkToggle() {
  var element = document.body;
  const nav=document.getElementById("nb")
  const table=document.getElementById("table")
  element.classList.toggle("dark-mode");
  
  if (nav.style.backgroundColor == 'black'){
   nav.style.backgroundColor='white';
  }
  else{
    nav.style.backgroundColor='black';
  }
}

/*contact*/

    function toggleButton() {
        var secondButton = document.getElementById("send");
        // Toggle the display property between 'none' and 'block'
        if (secondButton.style.display === "none") {
            secondButton.style.display = "block"; // Show the second button
        } else {
            secondButton.style.display = "none"; // Hide the second button
        }
    }
