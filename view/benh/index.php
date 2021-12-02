<div class="tab-benh">
    <?php //var_dump($listBenh);?>
    
    <?php 
       
            
            foreach($records as $val) {
              $val = $val[0];
//                var_dump($val);
              $char = $val[0]; //first char
//              var_dump($val[0]);
              if ($char !== $lastChar) {
                if ($lastChar !== '') echo '<br>';
                
                echo strtoupper($char).'<br>'; //print A / B / C etc
                $lastChar = $char;
              }

             echo $val.'<br>';
             
            }
        
        ?>
    
    
</div>
