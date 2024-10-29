document.addEventListener('DOMContentLoaded', function () {
    const options = {
        root: null, // Use the viewport
        rootMargin: '0px',
        threshold: 0.1 // Trigger when 10% of the element is visible
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate'); // Add class to trigger animation for items
                observer.unobserve(entry.target); // Stop observing after adding the class
            }
        });
    };

    const observer = new IntersectionObserver(callback, options);
    const timelineItems = document.querySelectorAll('.cont');
    const timeline = document.querySelector('.timeline'); // Select the timeline

    // Observe each timeline item
    timelineItems.forEach(item => {
        observer.observe(item);
    });

    let scrollTimeout; // Timeout variable to detect scrolling stop

    window.addEventListener('scroll', () => {
        // Clear the timeout if it's already set
        clearTimeout(scrollTimeout);

        // Set a new timeout to detect when scrolling has stopped
        scrollTimeout = setTimeout(() => {
            // Check visibility of timeline items and add animation if needed
            let itemsVisible = false; // Flag to check if any items are visible

            timelineItems.forEach(item => {
                const rect = item.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    item.classList.add('animate'); // Add animation class if visible
                    itemsVisible = true; // At least one item is visible
                } else {
                    item.classList.remove('animate'); // Remove animation class if not visible
                }
            });

            // Trigger line animation if any items are visible
            if (itemsVisible) {
                timeline.classList.add('animate-line'); // Add class to trigger line animation
            } else {
                timeline.classList.remove('animate-line'); // Remove class if no items are visible
            }
        }, 100); // Adjust this delay as necessary
    });
});
