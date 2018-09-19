<div id="container">
    <div id="box">
        <div id="header">
            <?php 
                $lieu = $xml[0]->sites->site[$value]['lieu'];
                if($_POST['institution']||$_POST['adresse']){
                    echo "<img src='pic/picto_urgence_feu_blank.png' alt='bouton' class='pic_pt_alarme'>, <p id='data'> VOS COORDONNEES : </br>", $_POST['institution'],"</br>",$_POST['adresse'], "</p>";
                }else{
                    echo "<img src='pic/picto_urgence_feu.png' alt='bouton' class='pic_pt_alarme'>";
                }
            ?> 
        </div>       
        <div style="margin-top:7px;">
                <img src="pic/picto_fire.png" alt="feu" id="vignette">
                <p class="main_content"><?php echo $xml[0]->sites->site[$value]->situation[0]->procedure->etape[0+$hid]['label']; ?></p>        
        </div>
        <form action="feu.php" method="post" id="form">
            
            <div id="next_box">
                <p id="next_content">prochaine étape</p>
                <img src="pic/picto_arrow.png" alt="prochaine étape" id="next">
            </div>
            
            <input type="hidden" name="hid" value="<?php 
            
                if($hid<count($x)-1){
                    echo $hid += 1;
                }else{
                    echo $hid = $hid;
                } 

            ?>">
            <input type="hidden" name="alert" value="on">
            <input type="hidden" name="menu" value="<?php echo $value?>">
            <input type="hidden" name="adresse" value="<?php echo $adresse?>">
            <input type="hidden" name="institution" value="<?php echo $institution?>">
        </form>
    </div>
</div>
<script src="js/main.js"></script>