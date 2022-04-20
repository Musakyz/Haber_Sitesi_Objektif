<?php 

include("baglantı.php");




     //Kullanicinın IP adresi

    

    
     
     

     $eklemee="INSERT INTO anketim(idim,oyum) VALUES(1, 1)";
     
    
     $baglantı->query($eklemee);
    
     


         

        echo "Oy Kullandığınız için Teşekkür ederiz<br>

        <a href='anketsonuclar.php'>Sonucları Görmek İçin Tıklayınız...</a>";

        

    

    ?> 