<?php include("Header.php"); ?>
<section class="main__container">
    <form class="main__formulaire main__formulaireAddProduct" action="../functions/FonctionProduct.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="productCategory">Choisi la catégorie :</label>

            <select class="formulaire__select" name="productCategory">
                <option value="louis14">Louis XIV</option>
                <option value="louis16">Louis XVI</option>
            </select>
        </div>
        <div>
            
        </div>
    </form>
</section>
<?php include("Footer.php"); ?>