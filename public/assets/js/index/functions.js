let url_cryptocurrencies = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd"
let divcryptomonedas = document.getElementById("cryptomonedas");


fetch(url_cryptocurrencies)
.then(respuesta => respuesta.json())
.then(rptDecodificada => {
  rptDecodificada.forEach(element => {
    console.log(element);
    let rank = element.market_cap_rank;
    let imagen = element.image;
    let nombre = element.name;
    let precio = element.current_price;
    let simbolo = element.symbol;
    let ultActualizacion = element.last_updated;
    if(element.market_cap_rank <= 5){
      bodyTable(rank,imagen,nombre,precio,simbolo,ultActualizacion)
    }
  });
  
});


function bodyTable(rank,imagen,nombre,precio,simbolo,ultActualizacion){
  divcryptomonedas.innerHTML +=
  `<tr>
      <td>${rank}</td>
      <td>
      <img src='${imagen}' class='imagenCrypton'>
        <strong>${nombre}</strong>
        ${simbolo.toUpperCase()}
      </td>
      <td>${new Intl.NumberFormat().format(precio)}</td>
      <td>${ultActualizacion}</td>
   </tr>`;
}