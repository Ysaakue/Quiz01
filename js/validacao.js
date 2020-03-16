// Valição primeira questão
$('#submit01').click(function(){
  if($('input[type="radio"]:checked').length!=1){
    event.preventDefault();
    alert("Você deve marcar um item para continuar");
  }
})

//Validação segunda questão
$('#submit02').click(function(){
  if(document.getElementById('input-text-q2').value.length<1){
    event.preventDefault();
    alert("Você deve escrever algo na caixa de texto");
  }
})

//Validação terceira questão
$('#submit03').click(function(){
  if($('select#linguagens').children("option:selected").val() == "blank"){
    event.preventDefault();
    alert("Você deve escolher uma opção");
  }
})

//Validação quarte questão
$('#submit04').click(function(){
  if($('input:checkbox[name^=questao04]:checked').length<1){
    var r = confirm("Você não marcou nenhum item, tem certeza que quer contiuar?");
    if (r == false) {
      event.preventDefault();
    }
  }
})

