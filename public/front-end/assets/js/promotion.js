var x  = setInterval(() => {
    let targetTime = new Date(window.dateFinPromotion.interval);
    let now = new Date().getTime();
    let timeleft = targetTime - now;

    // Calculating the days, hours, minutes and seconds left
    let day = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    let hour = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minute = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    let second = Math.floor((timeleft % (1000 * 60)) / 1000);

    document.getElementById("day").innerText = day;
    document.getElementById("hour").innerText = hour;
    document.getElementById("minute").innerText = minute;
    document.getElementById("second").innerText = second;

    if (timeleft < 0) {
      clearInterval(x);
      document.getElementById("day").innerText = '0';
      document.getElementById("hour").innerText = '0';
      document.getElementById("minute").innerText = '0';
      document.getElementById("second").innerText = '0';
    }
  }, 1000);