function getCurrentPedido() {
  return fetch('http://deliveg.herokuapp.com/pagapedido')
    .then(res => res.json())
    .then(data => renderPedido(data))
} 

getCurrentPedido()

function renderPedido(pedido) { 
  document.getElementById('quant').innerHTML = 
  `Valor a pagar: R$${parseFloat(pedido.total).toFixed(2).replace('.', ',')}`
}

document.getElementById('pagar').onclick = pagar

function pagar() {
  $.ajax({
    url: 'http://deliveg.herokuapp.com/pagamentos',
    type: "POST",
    data: {
      status:'pago'
    }
   }).done(function(data) {
     console.log(data);
 })
}