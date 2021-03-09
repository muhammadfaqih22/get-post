<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="" >Lesson</label>
                <select name="lesson" class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Web Programming" name="lesson" >Web Programming</option>
                    <option value="Database" name="lesson" >Database</option>
                    <option value="Statiska" name="lesson" >Statiska</option>
                    <option value="PKN" name="lesson" >PKN</option>
                    <option value="UI/UX" name="lesson" >UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="uts" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="ass" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>

            <?php 
                $nama = $_GET['nama'];
                $nim= $_GET['nim'];
                $lesson = $_GET['lesson'];
                $uts = $_GET['uts'];
                $uas = $_GET['uas'];
                $ass = $_GET['ass'];
                $proses = $_GET['proses'];

                $hasil = $uts + $uas + $ass;
                $total = $hasil / 3;

                if($total >= 85){
                    $alphabet = "A";
                }
                elseif($total >= 80 && $total <= 84){
                    $alphabet = "B";
                }
                elseif($total >= 60 && $total < 80){
                    $alphabet = "C";
                }
                elseif($total >= 40 && $total < 60){
                    $alphabet = "D";
                }
                else{
                    $alphabet = "E";
                }
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?= $nama ?></li>
                    <li class="list-group-item">Nim : <?= $nim ?></li>
                    <li class="list-group-item">Lesson: <?= $lesson ?></li>
                    <li class="list-group-item"> UTS Value : <?= $uts ?> </li>
                    <li class="list-group-item">UAS Value: <?= $uas ?> </li>
                    <li class="list-group-item">Assignment Value: <?= $ass ?></li>
                    <li class="list-group-item">Value Total: <?= $total ?>  </li>
                    <li class="list-group-item">Value in Alphabet: <?= $alphabet ?></li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 80 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>
            </div>
        
    </div>
</body>
</html>