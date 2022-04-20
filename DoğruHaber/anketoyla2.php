<?php 

include("baglantı.php");




     //Kullanicinın IP adresi

    

    
     
     

     $eklemee="INSERT INTO anket(id,oy) VALUES(3, 1)";
     $baglantı->query($eklemee);
    
     


         

        echo "Oy Kullandığınız için Teşekkür ederiz<br>

        <a href='anketsonuclar.php'>Sonucları Görmek İçin Tıklayınız...</a>";

        

    

    ?> 