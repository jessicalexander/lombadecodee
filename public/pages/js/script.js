// Get elements
const openPopup = document.getElementById("openPopup");
const popupOverlay = document.getElementById("popupOverlay");
const closePopup = document.getElementById("closePopup");

// Show popup on link click
openPopup.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default link behavior
  popupOverlay.style.display = "flex"; // Show popup overlay
});

// Hide popup on close button click
closePopup.addEventListener("click", () => {
  popupOverlay.style.display = "none"; // Hide popup overlay
});

// Optional: Hide popup when clicking outside the content box
popupOverlay.addEventListener("click", (e) => {
  if (e.target === popupOverlay) {
    popupOverlay.style.display = "none";
  }
});
window.addEventListener("load", () => {
    const loader =document.querySelector('.loader')
    loader.classList.add("loader--hidden") ;

    loader.addEventListener('transitioned', () => {
        document.body.removeChild(loader);
    })
});
