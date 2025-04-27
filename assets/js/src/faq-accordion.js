/**
 * FAQ Accordion Functionality
 *
 * Handles opening/closing FAQ items and ensures only one item
 * is open at a time within each FAQ list.
 */
document.addEventListener('DOMContentLoaded', () => {
  const faqLists = document.querySelectorAll('.faq-list'); // Find all FAQ list containers

  if (!faqLists.length) {
    return; // Exit if no FAQ lists found on the page
  }

  faqLists.forEach((faqList) => {
    const faqItems = faqList.querySelectorAll('.faq-item'); // Get items within this specific list

    if (!faqItems.length) {
      return; // Skip if this list has no items
    }

    faqItems.forEach((item) => {
      const questionButton = item.querySelector('.faq-question');
      const answerPanel = item.querySelector('.faq-answer');

      if (!questionButton || !answerPanel) {
        return; // Skip if item structure is incomplete
      }

      questionButton.addEventListener('click', () => {
        const isOpen = item.classList.contains('is-open');

        // --- Close all items in THIS list ---
        faqItems.forEach((otherItem) => {
          if (otherItem !== item && otherItem.classList.contains('is-open')) {
            otherItem.classList.remove('is-open');
            otherItem
              .querySelector('.faq-question')
              .setAttribute('aria-expanded', 'false');
            otherItem.querySelector('.faq-answer').hidden = true;
          }
        });

        // --- Toggle the clicked item ---
        if (isOpen) {
          // Close it
          item.classList.remove('is-open');
          questionButton.setAttribute('aria-expanded', 'false');
          answerPanel.hidden = true;
        } else {
          // Open it
          item.classList.add('is-open');
          questionButton.setAttribute('aria-expanded', 'true');
          answerPanel.hidden = false; // Remove hidden attribute BEFORE CSS transition starts
        }
      });
    });
  });
});
