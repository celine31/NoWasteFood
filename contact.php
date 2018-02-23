<?php include_once 'header.php';
?>
<main>
    <form name="form1" methode="POST" action="">
        <div>
            <select class="custom-select border border-success rounded">
                <option selected value="m">M</option>
                <option value="mme">Mme</option>
            </select>
            <p>Nom</p><input type="text" name="nom" value="<?php ?>"class="border border-success rounded"/>
            <p>Prénom</p><input type="text" name="prenom" value="<?php ?>"class="border border-success rounded"/>
            <p>Email</p><input type="text" name="email" value="<?php ?>"class="border border-success rounded"/>
            <p>Votre message</p><input type="textarea" name="message"class="border border-success rounded" />
        </div>

        <div>
            <p> Nos coordonnes </p>
            <p> No Waste Food <br/>
                rue de Toulouse <br/>
                31000 TOULOUSE <br/>
                <a href="tel:0561000000"> 05.61.00.00.00</a><br/>
                <a href="mailto:noWasteFood@gmail.com">noWasteFood@gmail.com</a>
            </p>

            <p> Nous suivre </p>
            <i 
    </div>
</form>
</main>    
<?php
include_once 'footer.php';
