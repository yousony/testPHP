<?php

//require_once 'functionControllers.php';

include '../model/config.php';
include '../controller/functionControllers.php';


echo '<br>';
echo '<br>';

$controller = new functionControllers();

$daat = $controller->getData();

$codehtml = '

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<br>
<br>
<br>


<div class="container">
<div class="text-ceter">
<h1> Our super table</h1>
</div>
<br><br>
    <table class="table">
  <thead  style="background-color: #29ade4">
    <tr>
      <th scope="col">item 1 </th>
      <th scope="col">Item 2</th>
      <th scope="col">LItem 1 + Item 2</th>
      <th scope="col">Paire / impaire</th>
    </tr>
  </thead>
  <tbody>
  ';

//$controller = new functionControllers();
foreach ($daat as $key =>$val){

    $codehtml.='
    <tr>
      
      <td>'.$key.'</td>
      <td>'.$val[0].'</td>
      <td>'.$val[1].'</td>
      <td>'.$val[2].'</td>
    </tr>';

}

    
  $codehtml.='  
    
  </tbody>
</table>

</div>

';

echo $codehtml;
?>