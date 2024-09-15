function closePopup(above18) {
  var popup = document.getElementById("ageVerificationPopup");
  popup.style.display = "none";
  if (!above18) {
      var adultContent = document.getElementsByClassName("adult");
      for (var i = 0; i < adultContent.length; i++) {
          adultContent[i].style.display = "none";
      }
  }
}

// Show the age verification popup when the page loads
window.onload = function() {
  var popup = document.getElementById("ageVerificationPopup");
  popup.style.display = "block";
};