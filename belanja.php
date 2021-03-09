<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="belanja.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="Refrigator">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="Washing Machine">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date Shipping </label>
                    <input type="date" name="date" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" name='courier' class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Sicepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="address" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="courier" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="assurance" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="" class="btn btn-success btn-sm btn-block">

            </form>

        <?php
        
            $customer = $_POST['customer'];
            $total_item = $_POST['total_item'];
            $date = $_POST['date'];
            $courier = $_POST['courier'];
            $address = $_POST['address'];
            $courier_cost = $_POST['courier'];
            $assurance = $_POST['assurance'];
            $harga = $_POST['item'];


            if( $harga == "tv" ){
                $hasil = 3000000 * $total_item;     
            }
            
            else if($harga == "refrigator" ){
                $hasil = 6000000 * $total_item;
            }
            else {
                $hasil = 4000000 * $total_item;
            }

        ?>
        </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?=$customer?></li>
                    <li class="list-group-item">Item : <?=$harga?></li>
                    <li class="list-group-item">Date Shipping : <?=$date?> </li>
                    <li class="list-group-item">Courier Type : <?=$courier?></li>
                    <li class="list-group-item">Shipping Address : <?=$address?></li>
                    <li class="list-group-item">Courier Cost : <?=$courier_cost?></li>
                    <li class="list-group-item">Assurance Cost : <?=$assurance?></li>
                    <li class="list-group-item">Total Cost : <?=$hasil?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>