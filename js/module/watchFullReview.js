export const initWatchFullReview = () => {
    const textFullElements = document.querySelectorAll('.textFull');
    // console.log(textFullElements)

    textFullElements.forEach(function(textFull) {
        const button = document.querySelectorAll('.watchFull');
        button.forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                const currentButton = event.currentTarget;
                // console.log(currentButton);
                textFull.classList.toggle('truncate');
                currentButton.click();
            });
        });
    });
}