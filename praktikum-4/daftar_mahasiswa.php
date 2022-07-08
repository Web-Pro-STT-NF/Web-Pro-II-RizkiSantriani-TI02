<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b8f3725ee4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" type ="text/css"href="style.css">
    <title>Document</title>
</head>
<style>
    body{
     width: 90%;
     margin: 0 auto;
     border-style: solid;
    }
    a {
      text-decoration: none;
      display: inline-block;
      padding: 8px 12px;
      float: right;
    }

    a:hover {
      background-color: #ddd;
      color: black;
    }

    .previous {
      background-color: white;
      color: black;
    }

    .next {
      background-color: white;
      color: black;
    }

    .round {
        border-radius: 50%;
    }
    .angka{
        background-color: grey;
        color: white;
    }

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Review PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PHP5 OOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Submit</button>
                    </form>
                </ul>
                <ul class="navbar-nav me mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="form-group row mb-2 ml-2 mr-2">
        <div class="col-1">show
            <select id="jumlah" name="jumlah" class="custom-select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
            </select>entries
    </div>
    <div class="form-group row ml-2">
        <label for="cari" class="col-9 col-form-label"></label> 
            <div class="col-3">
                <div class="input-group">
                    <input id="cari" name="cari" placeholder="search" type="text" class="form-control"> 
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
    <table width="100%" class="table table-bordered table-striped border-black " >
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Thn Angkatan</th>
                <th scope="col">IPK</th>
                <th scope="col">Predikat</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>02011</td>
                <td>Faiz Fikri</td>
                <td>TI</td>
                <td>2012</td>
                <td>3.8</td>
                <td>Cum Laude</td>
                <td><i class="fa-solid fa-eye"></i>
                    <i class="fas fa-pen"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>02012</td>
                <td>Nurasuci</td>
                <td>TI</td>
                <td>2012</td>
                <td>3.9</td>
                <td>Cum Laude</td>
                <td><i class="fa-solid fa-eye"></i>
                <i class="fas fa-pen"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>02013</td>
                <td>Naursah Rosale/td>
                <td>SI</td>
                <td>2010</td>
                <td>3.45</td>
                <td>Memuaskan</td>
                <td><i class="fa-solid fa-eye"></i>
                <i class="fas fa-pen"></i>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>02014</td>
                <td>Farrah Fauziyah</td>
                <td>SI</td>
                <td>2010</td>
                <td>3.3</td>
                <td>Memuaskan</td>
                <td><i class="fa-solid fa-eye"></i>
                <i class="fas fa-pen"></i>
                </td>
            </tr>
        </tbody>
    </table>
    Showing 1 to 4 of 4 enteries
    <div class =" border-dark "></div>
    <div class = "container ">
        <a href="#" class="next ">Next &raquo;</a>
        <a href="#" class="angka ">1</a>
        <a href="#" class="previous ">&laquo; Previous</a>   
    <br/>
    <footer>
        <br/>
        <div class="border-top border-dark m-3"></div>
        <div class="m-3">
            <p><b>Lab Pemograman Web lanjutan</b></p>
            <p>Dosen Sirojul Munir S.SI,M.Kom</p>
            <p>STT-NF-Kampus B</p>
        </div>
    </footer>
</body>
</html>