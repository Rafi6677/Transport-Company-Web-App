<?php 

function insertData($table){
    $data;
    switch($table){
        case 'samochody':
            $data = 'Dodaj nowy pojazd:';
            $data .= '
                <form action="../Controller/checkCarsInsert.php" method="POST" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        Marka:
                        <input type="text" name="brand" class="form-control">
                    </div>
                    <div class="form-group">
                        Model:
                        <input type="text" name="model" class="form-control">
                    </div>
                    <div class="form-group">
                        Nr rejestracyjny:
                        <input type="text" name="idNumber" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Dodaj" name="submit" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            ';
        break;
        case 'kierowcy':
            $data = 'Dodaj nowego kierowcę:';
            $data .= '
                <form action="../Controller/checkDriversInsert.php" method="POST" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        Nazwisko:
                        <input type="text" name="surename" class="form-control">
                    </div>
                    <div class="form-group">
                        Imię:
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        Nr dowodu osobistego:
                        <input type="text" name="idNumber" class="form-control">
                    </div>
                    <div class="form-group">
                        Nr telefonu:
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        Email:
                        <input type="text" name="emial" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Dodaj" name="submit" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            ';
        break;
        case 'transporty':
            $data = 'Dodaj nowy transport:';
            $data .= '
                <form action="../Controller/checkTransportsInsert.php" method="POST" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        Kierowca:
                        <select name="driver" class="form-control">
	                      	<option value="">Type</option>
	                        <option value="">Commercial</option>
	                        <option value="">- Office</option>
	                        <option value="">Residential</option>
	                        <option value="">Villa</option>
	                        <option value="">Condominium</option>
	                        <option value="">Apartment</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Pojazd:
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        Towar:
                        <input type="text" name="cargo" class="form-control">
                    </div>
                    <div class="form-group">
                        Miejsce - wyjazd:
                        <input type="text" name="departure" class="form-control">
                    </div>
                    <div class="form-group">
                        Miejsce - przyjazd:
                        <input type="text" name="arrival" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Dodaj" name="submit" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            ';
        break;
    }
    
    echo $data;
}

?>