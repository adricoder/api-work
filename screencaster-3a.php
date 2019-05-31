<?php

$balance_Archenland = 100+200+300+678;
$balance_Narnia = 530+670+3;
$balance_LoneIsland = 3000+39+49+98;


$company = array( array("company"=>"Archenland Ltd", "Amounts"=>"100,-1,200,300,-700,678" , "Debits"=>1700, "Balance"=>$balance_Archenland),
               array("company"=>"Narnia Gmb", "Amounts"=>"530,-23,670,3,-1299" , "Debits"=>"1223", "Balance"=>$balance_Narnia),
               array("company"=>"Loneislands Pty", "Amounts"=>"-7568,39,49,-37,3000,98" , "Debits"=>"37,7568", "Balance"=>$balance_LoneIsland) 
             ); 
?>

<?php if (count($company) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($company))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($company as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>