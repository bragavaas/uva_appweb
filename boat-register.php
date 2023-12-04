<?php include('./includes/header.php'); ?>
<?php require_once('./includes/db.php');?>

<section class="homepage">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="homepage-intro-text">
                <h1>Alugue um Iate</h1>
                <p>Encontre o iate perfeito para você</p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="container register-form-section">
    <h2 id="register-intro-text">Registre sua Propriedade</h2>
    <div class="container">
            <div class="row">
                <div class="col-6">
                        <form action="./includes/boatregisterscript.php" method="post">
                    <div class="register-form-fields">
                            <div class="col-12">
                                <label for="Yacht_ad">Título do seu Anúncio:</label><br>
                                <input class="full-field" type="text" id="Yacht_ad" name="Yacht_ad"><br><br>
                            </div>
                            <div class="col-12">
                                <label for="Yatch_description">Descrição do anúncio:</label><br>
                                <input class="full-field" type="textarea" id="Yatch_description" name="Yatch_description"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="YachtName">Nome do Iate:</label><br>
                                <input type="text" id="YachtName" name="YachtName"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Manufacturer">Fabricante:</label><br>
                                <input type="text" id="Manufacturer" name="Manufacturer"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Model">Modelo:</label><br>
                                <input type="text" id="Model" name="Model"><br><br>
                            </div>
                            <div class="col-6">
                            <label for="YearBuilt">Ano de Construção:</label><br>
                            <input type="text" id="YearBuilt" name="YearBuilt"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Length">Comprimento:</label><br>
                                <input type="text" id="Length" name="Length"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Width">Largura:</label><br>
                                <input type="text" id="Width" name="Width"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="CrusingSpeed">Velocidade de Cruzeiro:</label><br>
                                <input type="text" id="CrusingSpeed" name="CrusingSpeed"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="MaxSpeed">Velocidade Máxima:</label><br>
                                <input type="text" id="MaxSpeed" name="MaxSpeed"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Cabins">Cabines:</label><br>
                                <input type="text" id="Cabins" name="Cabins"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Bathrooms">Banheiros:</label><br>
                                <input type="text" id="Bathrooms" name="Bathrooms"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="CurrentLocation">Localização:</label><br>
                                <input type="text" id="CurrentLocation" name="CurrentLocation"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="HourlyCost">Aluguel/Hora:</label><br>
                                <input type="float" id="HourlyCost" name="HourlyCost"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="Passengers">Quantidade de Passageiros:</label><br>
                            <input type="text" id="Passengers" name="Passengers"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="OwnerID">ID do Proprietário:</label><br>
                                <input type="text" id="OwnerID" name="OwnerID"><br><br>
                            </div>
                            <div class="col-6">
                                <label for="YachtImage">Imagens do Iate:</label><br>
                                <input type="file" id="photos" name="photos[]" multiple accept="image/*"><br><br>
                            </div>
                        </div>
            
                    <input class="submit-btn" type="submit" value="Cadastrar Propriedade">
                </form>
                </div>
                <div class="col-6">
                <img src="./assets/img/featured-1.jpg" alt="Featured Item">
                </div>
            </div>
            
    </div>
    
</section>


    