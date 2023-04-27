//script
//$(document).ready(function(){
  //  $("#telefone").mask("(99) 99999-9999");
  
    //$("#cnpj").mask("99.999.999/9999-99");
 // });

 function mascaraCNPJ(cnpj) {
  cnpj = cnpj.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
  cnpj = cnpj.replace(/^(\d{2})(\d)/, '$1.$2'); // Adiciona ponto após os primeiros 2 dígitos
  cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3'); // Adiciona ponto após os próximos 3 dígitos
  cnpj = cnpj.replace(/\.(\d{3})(\d)/, '.$1/$2'); // Adiciona barra após os próximos 3 dígitos
  cnpj = cnpj.replace(/(\d{4})(\d)/, '$1-$2'); // Adiciona traço após os últimos 4 dígitos
  return cnpj;
}
