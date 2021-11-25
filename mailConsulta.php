<?php
$para = "proposta@viseoinvestimentos.com.br"; // destino
$assunto = "Consulta de Precatório"; // assunto
$formularioConsultaCampoEmail = $_POST['formulario-consulta-campo-email'];
$formularioConsultaCampoNome = $_POST['formulario-consulta-campo-nome']; // variaveis
$formularioConsultaCampoCpf = $_POST['formulario-consulta-campo-cpf'];
$formularioConsultaCampoTel = $_POST['formulario-consulta-campo-tel'];
$formularioConsultaCampoTipo = $_POST['formulario-consulta-campo-tipo'];
$formularioConsultaCampoMensagem = $_POST['formulario-consulta-campo-mensagem'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From: $de";
$headers .= "Reply-To: $formularioConsultaCampoEmail";
// Corpo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:18px;
color: #000;
}
a{
color: #fff;
text-decoration: none;
}
a:hover {
color: #000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
        <tr>
          <td>
            Formulario de consulta
          </td>
          <td>
            <tr>
              <td width='500'>Nome: $formularioConsultaCampoNome</td>
            </tr>
            <tr>
              <td width='320'>E-mail: $formularioConsultaCampoEmail</td>
            </tr>
            <tr>
              <td width='320'>Cpf: $formularioConsultaCampoCpf</td>
            </tr>
            <tr>
              <td width='320'>Tipo: $formularioConsultaCampoTipo</td>
            </tr>
            <tr>
            <td width='320'>Tipo: $formularioConsultaCampoTel</td>
            </tr>
            <tr>
              <td width='320'>Mensagem: $formularioConsultaCampoMensagem</td>
            </tr>
          </td>
        </tr>
      </table>
  </html>
";

if (mail($para, $assunto, $arquivo, $headers)) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Email enviado com Sucesso!')
            window.location.href='./index.html';
            </SCRIPT>"
          );
} else {
    echo "Falha no envio";
}
?>