<?php include('./includes/header.php'); ?>
<?php include('./includes/db.php');?>



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

<?php 
    $id = $_GET['id'];
    $sql = "SELECT * FROM yachts WHERE YachtID = $id;";
    $result = $conn->query($sql);
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    
        echo '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f5f5f5; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; margin-bottom: 20px;">Detalhes do Iate: ' . $row['YachtName'] . '</h1>';
    
        // Loop through the yacht details and display them with some basic styling
        foreach ($row as $key => $value) {
            if (!is_numeric($key)) { // Exclude numeric keys
                echo '<p style="margin-bottom: 10px;"><strong>' . ucwords(str_replace('_', ' ', $key)) . ':</strong> ' . $value . '</p>';
            }
        }
    
        echo '</div>';
    } else {
        echo "Nenhum detalhe encontrado para este iate.";
    }

    // Close the database connection
    $conn->close();
    ?>
    

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

