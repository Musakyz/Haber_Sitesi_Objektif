<?php 

include("baglantı.php");




     //Kullanicinın IP adresi

    

    
     
     

     $eklemee="INSERT INTO anket(id,oy) VALUES(2, 1)";
     $ekleme="INSERT INTO anketim(idim,oyum) values(1,1)";
     $baglantı->query($ekleme);
     $baglantı->query($eklemee);
    
     


         

        echo "Oy Kullandığınız için Teşekkür ederiz<br>

        <a href='anketsonuclar.php'>Sonucları Görmek İçin Tıklayınız...</a>";

        

    

    ?> 