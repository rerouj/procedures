<div id="container">
    <div id="box">
        <img src="pic/picto_urgence_feu.png" alt="bouton" class="pic_pt_alarme">
        <p class="content">EN CAS D'INCENDIE, APPUYEZ</br> SUR LE BOUTON D'URGENCE.</p>
        <form action="feu.php" method="post" id="form">
            <img src="pic/picto_button.png" alt="Appuyez uniquement en cas de danger!" id="pic_but"></br>
            <input type="hidden" name="alert" value="on">
            <input type="hidden" name="menu" value="<?php echo $value?>">
            <input type="hidden" name="adresse" value="<?php echo $adresse?>">
            <input type="hidden" name="institution" value="<?php echo $institution?>">
        </form>
    </div>
</div>
<script src="js/procedure.js"></script>