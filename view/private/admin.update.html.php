<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Admin Update</title>
</head>
<body>
<?php if(isset($error)): ?>
                    <h3 class="error"><?=$error?></h3>
            <?php endif ?>
        <div class="container">
                <section class="vh-100 bg-secondary.bg-gradient">
                  <div class="container">
                    <div class="row ms-5  align-items-center">
                      <div class="col-lg-12 col-xl-11">
                        <div class="text-center text-light mt-5">
                          <h1>Admin Update</h1>
                            <nav>
                              <ul class="list-unstyled">
                              <li><a class="text-light" href="./">Accueil Admin</a></li>
                              <li><a class="text-light" href="?delete">Supprimer une data</a></li>
                              <li><a class="text-light" href="?disconnect">Déconnexion</a></li>      
                            </ul>
                          </nav>
                        </div>

    <div class="card text-black border border-primary" style="border-radius: 25px;">
                          <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                              <div class="col-md-10 col-lg-6 col-xl-5">
          
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-primary">Modifier la data</p>

                                <form action="" name="localisations" method="POST">
                                  <div class="d-flex flex-row align-items-center ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example3c">nom</label>
                                      <input type="text" name="nom" placeholder="nom" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['nom']?>" required>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row align-items-center ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example3c">adresse</label>
                                      <input type="text" name="adresse" placeholder="adresse" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['adresse']?>" required>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row align-items-center ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example3c">numero</label>
                                      <input type="number" name="numero" placeholder="numero" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['numero']?>" required>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row align-items-center ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example3c">ville</label>
                                      <input type="text" name="ville" placeholder="ville" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['ville']?>" required>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row align-items-center ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example3c">codepostal</label>
                                      <input type="number" name="codepostal" placeholder="codepostal" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['codepostal']?>" required>
                                    </div>
                                  </div>

                                  <div class="d-flex flex-row align-items-center ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example4c">latitude</label>
                                      <input type="number" step="0.0000001" name="latitude" placeholder="latitude" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['latitude']?>" required>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row align-items-center mb-5 ">
                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                      <label class="form-label" for="form3Example4c">longitude</label>
                                      <input type="number" step="0.0000001" name="longitude" placeholder="longitude" class="form-control border border-primary border-2 Regular shadow" value="<?=$update['longitude']?>" required>
                                    </div>
                                  </div>
                                  <input type="hidden" name="id" value="<?=$update['id']?>">
              
                                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                                  <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" me-2 bi bi-globe-americas" viewBox="0 0 16 16">
                                  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                                  </svg>Update</button>
                                </div>
                                </form>
                
                              </div>
                              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                
                                <div class="terre mx-5"></div>
                
                              </div>
                            </div>
                          </div>
                        </div>


                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
</body>
</html>