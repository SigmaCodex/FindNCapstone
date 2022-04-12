function showDate() {
    let date = new Date();
    let d = date.getDate();
    let months = [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ];
    let m = months[date.getMonth()];
    let y = date.getFullYear();
    let days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    let weekDay = days[date.getDay()];
    let currentDate = document.querySelector(".date");
  
    currentDate.innerHTML = `${m} ${d},${y}`;
  }
  
  function showTime() {
    let date = new Date();
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    let amPm = "AM";
  
    if (h === 0) {
      h = 12;
    }
  
    if (h > 12) {
      h = h - 12;
      amPm = "PM";
    }
  
    if (h < 10) {
      h = `0${h}`;
    }
  
    if (m < 10) {
      m = `0${m}`;
    }
  
    if (s < 10) {
      s = `0${s}`;
    }
  
    let clock = document.querySelector(".my-clock");
  
    clock.innerHTML = `${h}:${m} ${amPm}`;
  
    setTimeout(showTime, 1000);
  }
  
  showTime();
  showDate();
  