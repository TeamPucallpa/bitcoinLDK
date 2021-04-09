let end = new Date();

/* Variables juntas */
let DIAS_EN_MILISEGUNDOS = 24 * 60 * 60 * 1000;

/*Variables separadas*/
let _second = 1000;
let _minute = _second * 60;
let _hour = _minute * 60;
let _day = _hour * 24;
let timer;

/* MAÑANA */
let tomorrow = new Date(end.getTime() + DIAS_EN_MILISEGUNDOS);

function showRemaining() {
  let now = new Date();

  let distance = tomorrow - now;
  let days = Math.floor(distance / _day);
  let hours = Math.floor((distance % _day) / _hour);
  let minutes = Math.floor((distance % _hour) / _minute);
  let seconds = Math.floor((distance % _minute) / _second);

  // document.getElementById('time-day').innerHTML = days + ' dias, ';
  document.getElementById('time-day').innerHTML = '';
  document.getElementById('time-day').innerHTML += hours + 'h ';
  document.getElementById('time-day').innerHTML += minutes +'m ';
  document.getElementById('time-day').innerHTML += seconds +'s ';
}

timer = setInterval(showRemaining, 1000);