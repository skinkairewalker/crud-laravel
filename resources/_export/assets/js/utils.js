function buy(id,nome,preco){
    
   var pide = document.getElementById("pedidoid");
   var pnome = document.getElementById("pedidonome");
   var ppreco = document.getElementById("pedidopreco");
   $('#modal-pedir').modal('show');
   pide.setAttribute('value', id); 
   pnome.setAttribute('value', pnome); 
   ppreco.setAttribute('value', preco); 
   
}

function editar(id){
    
   var pide = document.getElementById("prodid");
   
   $('#modal-editar').modal('show');
   pide.setAttribute('value', id); 
   
}
