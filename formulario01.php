<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script type="text/javascript">
     window.onload=()=>{

     //var,let, const 
     const nome = document.getElementById("nome");
     let bt =  document.getElementById("bt_");
     let logradouro = document.getElementById("logradouro");
     let frm = document.getElementsByTagName("form")[0]

     bt.onclick=()=>{
    
         if(nome.value.length <= 3 ){
            alert("campo nome obrigatorio");
            nome.focus();
         } 

         if(email.value.length <= 10 ){

            email.style.borderColor = "red";
            logradouro.focus();
         }

         frm.submit();
           
       }

     }

   </script>


</head>
<body>
    <!-- POST - 
         GET - 
         -->
    <form action="processa.php" method="post" enctype="multipart/form-data">
        <div>
         <label> nome: </label>
         <input type="text" name="nome" id="nome">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "nome"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
      
        <div>
         <label> Logradouro: </label>
         <input type="text" name="logradouro" id="logradouro">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "logradouro"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 

        <div>
         <label> Numero: </label>
         <input type="text" name="numero" id="numero">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "numero"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> CEP: </label>
         <input type="text" name="CEP" id="CEP">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "CEP"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Complemento: </label>
         <input type="text" name="complemento" id="complemento">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "complemento"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Bairro: </label>
         <input type="text" name="bairro" id="bairro">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "bairro"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Cidade: </label>
         <input type="text" name="cidade" id="cidade">
         <?php  if( isset($_REQUEST["erro"]) &&   $_REQUEST["erro"] == "cidade"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 
        <div>
         <label> Estado: </label>
         <select name="estado" name="estado" id="estado">
         <option value="valor1" selected>*</option>
         <option value="valor2">AC</option>
         <option value="valor3">AL</option>
         <option value="valor4">AM</option>
         <option value="valor5">BA</option>
         <option value="valor6">CE</option>
         <option value="valor7">DF</option>
         <option value="valor8">ES</option>
         <option value="valor9">GO</option>
         <option value="valor10">MA</option>
         <option value="valor11">MT</option>
         <option value="valor12">MS</option>
         <option value="valor13">MG</option>
         <option value="valor14">PA</option>
         <option value="valor15">PB</option>
         <option value="valor16">PR</option>
         <option value="valor17">PE</option>
         <option value="valor18">PI</option>
         <option value="valor19">RJ</option>
         <option value="valor20">RN</option>
         <option value="valor21">RS</option>
         <option value="valor22">RO</option>
         <option value="valor23">RR</option>
         <option value="valor24">SC</option>
         <option value="valor25">SP</option>
         <option value="valor26">SE</option>
         <option value="valor27">TO</option>
         
         </select>
         <?php  if( isset($_REQUEST["erro"]) &&  $_REQUEST["erro"] == "estado"){

               echo "<span style='color:red'>*</span>";
         } ?>
        </div> 

      <div>
        <label>Imagem</label>
         <input type="file" name="arq" id=""/>
       </div>
       <div>
         <input type="submit" value="enviar"/>   
       </div>
    </form>
     


</body>
</html>