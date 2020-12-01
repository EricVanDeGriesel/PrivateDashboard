var api = {
  key: "16097ceeccf43bca442735334506a958",
  base: "https://api.openweathermap.org/data/2.5/",
  lat: "51.286473",
  long: "7.679787"
}
/* Funktion falls man manuell Ort eingeben will bzw. über getLocation arbeiten will!
function setQuery(evt){
    if (evt.keyCode == 13){
        getResults(searchbox.value);
        console.log(searchbox.value);
        getLocation();
    }
}
*/

function getResults(query) {
  fetch(`${api.base}onecall?lat=${api.lat}&lon=${api.long}&lang=de&units=metric&APPID=${api.key}`)
    .then(weather => {
      return weather.json();
    }).then(displayWeatherWidgetFull);

  fetch(`${api.base}weather?lat=${api.lat}&lon=${api.long}&lang=de&units=metric&APPID=${api.key}`)
    .then(weatherCurrent => {
      return weatherCurrent.json();
    }).then(displayResults);

}


function displayWeatherWidgetFull(weather, weatherCurrent) {
  //displayResults(weather);
 dailyForecast(weather);
  //hourlyForecast(weather);
  hourlyForecastChart(weather);

  console.log(weather);
}

// Die Funktion muss mit dem Current Weather Apicall gemacht werden. Weiterer Fetch in getResults + Anpassung der Json ansteuerung
function displayResults(weatherCurrent) {

  console.log(weatherCurrent);

  let icon = document.querySelector('.icon');
  icon.innerHTML = "<img width='120px' class='centerContent' src=./widget/weather/src/weatherIcons/" + weatherCurrent.weather[0].icon + ".svg>";

  let temp = document.querySelector(' .temp');
  temp.innerText = `${Math.round(weatherCurrent.main.temp)}°`;

  let weather_el = document.querySelector(' .weather');
  weather_el.innerText = weatherCurrent.weather[0].description;

  let feels = document.querySelector('.feels');
  feels.innerHTML = "<img width='20px' src=./widget/weather/src/weatherIcons/feels.svg> " + `${Math.round(weatherCurrent.main.feels_like)}°`;

  let hilow = document.querySelector('.hi-low');
  hilow.innerHTML = "<img width='20px' src=./widget/weather/src/weatherIcons/hilow.svg> " +  `${Math.round(weatherCurrent.main.temp_max)}° / ${Math.round(weatherCurrent.main.temp_min)}°`;

  let hum = document.querySelector('.humidity');
  hum.innerHTML = "<img width='20px' src=./widget/weather/src/weatherIcons/hum.svg> " +  `${weatherCurrent.main.humidity}%`;

  let windSpeed = document.querySelector('.windSpeed');
  windSpeed.innerHTML = "<img width='20px' src=./widget/weather/src/weatherIcons/wind.svg> " + `${weatherCurrent.wind.speed}m/s`;

}

/* Aktuellen Standort abfragen. Jedoch zu ungenau für optimalen Erfolg aktuell
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }
  function showPosition(position) {
      var location = {
          latitude : position.coords.latitude,
          longitude : position.coords.longitude
      }
 console.log(position.coords.latitude , position.coords.longitude);
 console.log(location.latitude);
  }

*/
function timeConverter(UNIX_timestamp) {
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  let day = days[a.getDay()];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec;
  //var time = date + ' ' + month + ' ' + year;
  return time;
}

let weekdays = ["Mo.", "Di.", "Mi.", "Do.", "Fr.", "Sa.", "So."];

function unixToDay(UnixDay) {
  var b = new Date(UnixDay * 1000);
  var day = weekdays[b.getDay()];

  return day;
}

function unixToHour(UnixDay) {
  var b = new Date(UnixDay * 1000);
  var hour = b.getHours();
  var minutes = b.getMinutes();

  var time = hour + `:` + minutes + `0`;

  return time;
}


function dailyForecast(weather) {
  for (let i = 0; i < (weather.daily.length - 2); i++) {
    var headerDay = document.getElementById("dailyHeaderSlot" + (i + 1));
    headerDay.innerText = unixToDay(weather.daily[i].dt);

    var iconElement = document.getElementById("iconSlot" + (i + 1));
    iconElement.innerHTML = "<img width='50px' src=./widget/weather/src/weatherIcons/" + weather.daily[i].weather[0].icon + ".svg>";

    var tempElement = document.getElementById("bodySlot" + (i + 1));
    tempElement.innerText = `${Math.round(weather.daily[i].temp.day)}° / ${Math.round(weather.daily[i].temp.night)}°`;

    var feels = document.getElementById("feels" + (i + 1));
    feels.innerHTML = "<img width='25px' src=./widget/weather/src/weatherIcons/feels.svg>" + `${Math.round(weather.daily[i].feels_like.day)}°`;

    var hilow = document.getElementById("hilow" + (i + 1));
    hilow.innerHTML = "<img width='25px' src=./widget/weather/src/weatherIcons/hilow.svg>" + `${Math.round(weather.daily[i].temp.max)}° / ${Math.round(weather.daily[i].temp.min)}°`;

    var hum = document.getElementById("hum" + (i + 1));
    hum.innerHTML = "<img width='25px' src=./widget/weather/src/weatherIcons/hum.svg> " + `${weather.daily[i].humidity}%`;

  }
}

$('#weekMain1, #weekAlt1').click(function () {
  $('#weekMain1, #weekAlt1').toggle();
});
$('#weekMain2, #weekAlt2').click(function () {
  $('#weekMain2, #weekAlt2').toggle();
});
$('#weekMain3, #weekAlt3').click(function () {
  $('#weekMain3, #weekAlt3').toggle();
});
$('#weekMain4, #weekAlt4').click(function () {
  $('#weekMain4, #weekAlt4').toggle();
});
$('#weekMain5, #weekAlt5').click(function () {
  $('#weekMain5, #weekAlt5').toggle();
});
$('#weekMain6, #weekAlt6').click(function () {
  $('#weekMain6, #weekAlt6').toggle();
});


function hourlyForecastChart(weather) {
  var time = [];
  var temperature = [];
  for (let hour = 0; hour < 13; hour++) {

    time[hour] = (unixToHour(weather.hourly[hour].dt));
    temperature[hour] = `${Math.round(weather.hourly[hour].temp)}`;

  }

  new Chart(document.getElementById("hourlyChart"), {
    type: 'line',
    responsive: true,
    data: {
      labels: time,
      datasets: [{
        data: temperature,
        label: "Temperatur",
        borderColor: "#DE6E4B",
        borderWidth: "1px",
        pointBackgroundColor: "#DE6E4B",
        pointRadius: 2,
        fill: true,
        backgroundColor: "rgba(222, 111, 75, 0.2)",

      }, ]
    },
    options: {
      legend: {
        display: false,
      },
      scales: {
        xAxes: [{
          gridLines: {
            color: "rgba(0, 0, 0, 0)",
          },
          ticks: {
            fontColor: "#DEE2E6"
          }
        }],
        yAxes: [{
          gridLines: {
            color: "rgba(0, 0, 0, 0)",
          },
          ticks: {
            fontColor: "#DEE2E6"
          }
        }]
      }
    },

  });
}