const btnAceptarShop = document.getElementById('btnAceptarShop');
if(btnAceptarShop){
  btnAceptarShop.addEventListener('click', e => {
    let checkOne = document.getElementById('customCheck1');
    let checkTwo = document.getElementById('customCheck2');
    let checkThree = document.getElementById('customCheck3');
    let smsTerminos = document.getElementById('smsTerminos');
    let btcSHOPplan = document.querySelector('.btcSHOPplan');
    let nombrePlanBTC = document.getElementById('nombrePlanBTC').value;

    if(checkOne.checked == true &&  checkTwo.checked == true &&  checkThree.checked == true)
    {
        smsTerminos.style.display = "none";
        $('.bd-example-modal-lg').modal('hide');
        checkOne.checked = false;
        checkTwo.checked = false;
        checkThree.checked = false;
        $('#modalPlanBasico').modal('show');
        btcSHOPplan.innerHTML =  nombrePlanBTC;

    }else{
      smsTerminos.style.display = "";
    }

  })
}

function modalTerminos(kartera,precio)
{
  let nombrePlanBTC = document.getElementById('nombrePlanBTC');
  $('.bd-example-modal-lg').modal('show');
  nombrePlanBTC.value = kartera;
}

function modalPayPlan(){
  let name_plan = document.querySelector('.btcSHOPplan').textContent;
  let textInnerNamePlan = document.querySelector('.name_plan');
  
  textInnerNamePlan.innerHTML = "COMPRA: " + name_plan;
  $('#modalPlanBasico').modal('hide');
  $('#modalBilleteraPlan').modal('show');


  switch (name_plan) 
  {
      case "BasicoBTC":
          let precio_01 = 50;
          captarPrecio(precio_01)
        break;
      
      case "BronceBTC":
          let precio_02 = 100;
          captarPrecio(precio_02)
        break;
      
      case "PlataBTC":
          let precio_03 = 1000;
          captarPrecio(precio_03)
        break;

      case "OroBTC":
          let precio_04 = 10000;
          captarPrecio(precio_04)
        break;   
      case "OroBTC":
          let precio_05 = 25000;
          captarPrecio(precio_05)
        break;
      default:
        break;
  }

}

function captarPrecio(precio){
  let url_cryptocurrencies = "https://blockchain.info/tobtc?currency=USD&value="+precio;

  let usdBtc = document.getElementById('usd_btc');
  let mntDnr = document.getElementById('montoDinero');

  fetch(url_cryptocurrencies)
  .then(respuesta => respuesta.json())
  .then(rptDecodificada => {
    usdBtc.innerHTML = rptDecodificada
    mntDnr.innerHTML = precio + " USD";
  });
}

