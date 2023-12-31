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

    <section class="homepage-featured">
        <div class="row">
            <div class="col-12 homepage-featured-intro-text">
                <h2>O Centro de aluguel de Iates mais movimentado da cidade</h2>
                <p style="text-align:center !important">Navegue pela nossa lista crescente de iates particulares disponíveis para aluguel no Rio, com mais cidades em breve.</p>
            </div>
        </div>
            <?php
            $query = "SELECT * FROM yachts ORDER BY RAND() LIMIT 3;";
            $iates = $conn->query($query);
            $conn->close();
            ?>
            <div class="row homepage-featured-items">
            <?php foreach($iates as $iate): ?>
                <div class="col-4">
                    <div class="featured-item">
                        <a href="details.php?id=<?= $iate['YachtID'] ?>">
                            <img src="./assets/img/featured-1.jpg" alt="Featured Item">
                        </a>
                        <div class="featured-item-details">
                            <div class="yacht-hourly-rate"><span><strong><?= $iate['HourlyCost'] ?>/hora</strong></span></div>
                            <a style="" href="details.php?id=<?= $iate['YachtID'] ?>><h3 class="yacht-ad"><?= $iate['Yacht_ad'] ?></h3></a>
                            <div class="inline yacht-type"><i class="fa-solid fa-sailboat"></i><span> <?= $iate['YachtName'] ?> </span></div>
                            <div class="inline yacht-type"><i class="fa-solid fa-compass"></i><span> Iate / Com capitão</span></div>
                            <div class="inline yacht-location"><i class="fa-solid fa-location-dot"></i><span> <?= $iate['CurrentLocation'] ?></span></div>
                            <div class="inline yacht-location"><i class="fa-solid fa-people-group"></i><span><strong> Capacidade:</strong> <?= $iate['Cabins'] ?> Pessoas</span></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

          
        </div>

    </section>
<section class="booking-footer">
    <div class="container">
    <div class="row">
        <div class="col-4">
            <div class="booking-form">
                <h2>Reserve Já</h2>
                <form>
                    <div class="form-group">
                        <label for="booking-location"><i class="fa-solid fa-location-dot"></i> Localização</label>
                        <select class="form-control" id="booking-location">
                            <option>Rio de Janeiro</option>
                            <option>Angra dos Reis</option>
                            <option>Paraty</option>
                            <option>Ilha Grande</option>
                            <option>Paquetá</option>
                            <option>Búzios</option>
                            <option>Cabo Frio</option>
                            <option>Arraial do Cabo</option>
                        </select>
                        <label for="booking-date"><i class="fa-solid fa-calendar"></i> Data</label>
                        <input type="date" id="booking-date" name="trip-start" value="2023-11-30" min="2023-11-30" max="2024-11-30" />
                        <label for="guests"><i class="fa-solid fa-people-group"></i> Convidados</label>
                        <select class="form-control" id="guests">
                            <option>1 Pessoa</option>
                            <option>2 Pessoas</option>
                            <option>3 Pessoas</option>
                            <option>4 Pessoas</option>
                            <option>5 Pessoas</option>
                            <option>6 Pessoas</option>
                            <option>7 Pessoas</option>
                            <option>8 Pessoas</option>
                            <option>9 Pessoas</option>
                            <option>10 Pessoas</option>
                            <option>11 Pessoas</option>
                            <option>12 Pessoas</option>
                            <option>13 Pessoas</option>
                            <option>14 Pessoas</option>
                            <option>15 Pessoas</option>
                            <option>16 Pessoas</option>
                            <option>17 Pessoas</option>
                            <option>18 Pessoas</option>
                            <option>19 Pessoas</option>
                            <option>20 Pessoas</option> 
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Reservar</button>
                </form>
            </div>
        </div>
        <div class="col-4 booking-footer-info">
            <h2>DAILY RENTALS BY YACHT DAY</h2>
            <p>Yacht Day is a marketplace for boat owners and boating lovers to connect.  Yacht Day facilitates the transaction between both parties allowing quick and seamless access to boat rentals while providing a steady income flow to boat owners.</p>
            <p>We turn boats profitable and an alternative to boat ownership for our renters who jump straight to the enjoyment and pleasures of boating.</p>
            <p>Yacht Day currently operates rentals in Toronto Canada with expansion to other cities in the pipeline.</p>
            <div class="booking-quote"><span>“The best way to enjoy a boat is to rent it”</span>  </div>      
        </div>
        <div class="col-4 booking-footer-links">
            <h2>QUICK LINKS</h2>
            <ul>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Aluguel</a></li>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Sobre</a></li>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Contato</a></li>
                <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Suporte</a></li>
            </ul>
            <hr>
            <h2>CONTATO</h2>
            <i class="fa-solid fa-phone">+55 21 997235420</i>
            <br>
            <i class="fa-solid fa-envelope">contato@yacht.com.br</i>
        </div>
    </div>    
    </div>
</section>

