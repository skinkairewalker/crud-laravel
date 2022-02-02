function buy(id,nome,preco){
    
   var pide = document.getElementById("pedidoid");
   var pnome = document.getElementById("pedidonome");
   var ppreco = document.getElementById("pedidopreco");
   $('#modal-pedir').modal('show');
   pide.setAttribute('value', id); 
   pnome.setAttribute('value', nome); 
   ppreco.setAttribute('value', preco); 
   
}

function editar(id,nome,dsc,preco,foto){
    
   var upide = document.getElementById("prodid");
   var upnome = document.getElementById("prodnome");
   var uppreco = document.getElementById("prodpreco");
   var updesc = document.getElementById("proddesc");
   var upfoto = document.getElementById("prodfoto");
   
   $('#modal-editar').modal('show');
   upide.setAttribute('value', id); 
   upnome.setAttribute('value', nome); 
   uppreco.setAttribute('value', preco); 
   updesc.value=dsc;
   upfoto.setAttribute('value', foto); 
   
}

function deletar(id){
    
   var pide = document.getElementById("dp-pid");
   
   $('#modal-deletar').modal('show');
   pide.setAttribute('value', id); 
   
}

function hdeletar(){

   $('#modal-deletar').modal('hide');
   
}

function pulsar(e) { 
	if (e.which === 13 && !e.shiftKey) { 
		e.preventDefault(); 
		console.log('prevented'); 
		return false; 
	}
}

function mascaracpf(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}