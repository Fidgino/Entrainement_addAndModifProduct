<?php include("Header.php"); ?>
<section class="main__container">
    <form class="main__formulaire main__formulaireAddProduct" action="../functions/FonctionProduct.php" method="post" enctype="multipart/form-data">
        <div class="container__category">
            <label for="productCategory">Choisi la catégorie :</label>
            <select name="productCategory">
                <option value="louis14">Louis XIV</option>
                <option value="louis16">Louis XVI</option>
            </select>
        </div>
        <div class="container__socialClass">
            <label for="productSocialClass">Classe sociale produit :</label>
            <select name="productSocialClass">
                <option value="paysan">Paysan</option>
                <option value="bourgeois">Bourgeois</option>
                <option value="clerger">Clerger</option>
                <option value="noble">Noble</option>
            </select>
        </div>
        <div class="container__name">
            <label for="productName">Nom du produit :</label>
            <input type="text" name="productName">
        </div>
        <div class="container__description">
            <label for="productDescription">Description du produit :</label>
            <input type="text" name="productDescription">
        </div>
        <div class="container__price">
            <label for="productPrice">Prix du produit :</label>
            <input type="number" name="productPrice">
        </div>
        <div class="container__img">
            <label for="productImg">Image du produit :</label>
            <input type="file" name="productImg">
        </div>
        <input class="formSubmitButton" type="submit" name="submitCreateProduct" value="Créer le produit">
    </form>
</section>
<?php include("Footer.php"); ?>