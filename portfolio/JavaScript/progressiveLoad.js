// Select the container div
const container = document.querySelector('.observer-container');
// Get all sections inside the container
const sections = container.querySelectorAll('.section');

// Intersection Observer options
const observerOptions = {
  root: null, // Use the viewport as the root
  rootMargin: '0px',
  threshold: 0.25 // Trigger when 10% of the section is visible
};

// Callback function to handle visibility
function handleIntersection(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // Make the section visible when it's in view
      entry.target.classList.add('visible');
      // Stop observing the section after it becomes visible
      observer.unobserve(entry.target);
    }
  });
}

// Create a single observer instance
const observer = new IntersectionObserver(handleIntersection, observerOptions);

// Observe each section inside the container
sections.forEach(section => {
  observer.observe(section);
});
