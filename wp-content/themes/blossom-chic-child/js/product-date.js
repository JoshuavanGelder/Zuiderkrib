// Check if the page is a single product page
let isProductPage = document.querySelector('.single-product') != null;

if (isProductPage) {
    // Select the element to be obsevered
    let bookingSummery = document.querySelector('.mvvwb_summary');
    const config = { attributes: false, childList: true, subtree: false };

    // Rearange the text from the booking date
    const splitProductDate = function(mutationList, observer) {
        let bookingDate = document.querySelector('.mvvwb_booking_date');
        if (bookingDate == null) return;

        for(const mutation of mutationList) {
            // Check if the mutation is the booking date container
            if (mutation.type != 'childList') return;
            if (mutation.addedNodes[0] != bookingDate) return;
            if (bookingDate == null) return;

            // Get the innerHTML of the booking date container and split it at the spaces
            let bookingDateString = bookingDate.innerHTML;
            let bookingDateArray = bookingDateString.split(' ');

            // Add the space back at the and of every item of the array
            for (let i = 0; i < bookingDateArray.length; i++) {
                bookingDateArray[i] += ' ';
                bookingDateArray[i] = bookingDateArray[i].replace(',', '');
            }

            // Add the text in the right order to the innerHTML
            let newBookingString = '<span style="font-size:16px">' + bookingDateArray[1] + bookingDateArray[0] + bookingDateArray[2] + bookingDateArray[3] + bookingDateArray[5] + bookingDateArray[4] + bookingDateArray[6] + bookingDateArray[7] + 'dagen) </span>';
            bookingDate.innerHTML = newBookingString;
        }
    }
    const observer = new MutationObserver(splitProductDate);

    observer.observe(bookingSummery, config);
}
