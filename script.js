// Get all elements with the common class "myImg"
var images = document.querySelectorAll(".myImg");
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var closeBtn = document.querySelector(".close");

// Attach click event listeners to each image
images.forEach(function(image) {
    image.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
});

// Close the modal when the close button is clicked
closeBtn.onclick = function() {
    modal.style.display = "none";
};

// Close the modal when clicking outside of the modal content
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};