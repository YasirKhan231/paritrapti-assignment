// Countdown Timer
function updateCountdown() {
    const hours = document.getElementById("hours");
    const minutes = document.getElementById("minutes");
    const seconds = document.getElementById("seconds");
    const milliseconds = document.getElementById("milliseconds");

    let hr = parseInt(hours.textContent);
    let min = parseInt(minutes.textContent);
    let sec = parseInt(seconds.textContent);
    let ms = parseInt(milliseconds.textContent);

    ms--;

    if (ms < 0) {
        ms = 99;
        sec--;
        if (sec < 0) {
            sec = 59;
            min--;
            if (min < 0) {
                min = 59;
                hr--;
                if (hr < 0) {
                    // Reset countdown or handle completion
                    hr = 47;
                    min = 6;
                    sec = 57;
                    ms = 8;
                }
            }
        }
    }

    hours.textContent = hr.toString().padStart(2, "0");
    minutes.textContent = min.toString().padStart(2, "0");
    seconds.textContent = sec.toString().padStart(2, "0");
    milliseconds.textContent = ms.toString().padStart(2, "0");
}

// Update countdown every 10ms
setInterval(updateCountdown, 10);

// Cart and Wishlist Counter Updates
document.addEventListener("DOMContentLoaded", () => {
    const wishlistBtn = document.querySelector(".wishlist");
    const cartBtn = document.querySelector(".cart");

    wishlistBtn.addEventListener("click", () => {
        const counter = wishlistBtn.querySelector(".counter");
        let count = parseInt(counter.textContent);
        counter.textContent = count + 1;
    });

    cartBtn.addEventListener("click", () => {
        const counter = cartBtn.querySelector(".counter");
        let count = parseInt(counter.textContent);
        counter.textContent = count + 1;
    });
});
