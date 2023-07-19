<?php require_once './header.php' ?>

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Parametrlər</a></li>
                                            <li class="breadcrumb-item active">Əlaqə Parametrləri</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Parametrlər</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                       
                    


                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Əlaqə Parametrləri 
                                            <?php if(isset($_GET['status'])) {
                                                if($_GET['status']=='success') {?>
                                               <span style="color:green">| Ugurla yeniləndi!</span>
                                            <?php } } else if (isset($_GET['status'])){
                                                if($_GET['status']=='error'){?>
                                               <span style="color:red">| Ugursuz oldu!</span>'
                                           <?php }}?>
                                                
                                         
                                        
                                        
                                        </h4>
                                        <p class="text-muted font-14">
                                            Bu bölmədə Super Admin səlahiyyətinə malik olan şəxs Veb Saytın parametrlərinə düzəliş edə bilər.
                                    </p>

                                        <form action="../baglanti/servis.php" class="parsley-examples" method="POST">
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Mobil Nömrə<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_telefonMobil" parsley-trigger="change" required placeholder="Mobil nömrə (+994 XX XXX XX XX)" class="form-control" id="parametr_telefonMobil" value="<?php echo $parametr_Cavab['parametr_telefonMobil'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Şəhər Nömrəsi<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_telefonSheher" parsley-trigger="change" required placeholder="Şəhər nömrəsi (+994 12 XXX XX XX)" class="form-control" id="parametr_telefonSheher" value="<?php echo $parametr_Cavab['parametr_telefonSheher'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">E-mail<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_mail" parsley-trigger="change" required placeholder="E-mail adresi" class="form-control" id="parametr_mail" value="<?php echo $parametr_Cavab['parametr_mail'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Ünvan<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_unvan" parsley-trigger="change" required placeholder="Ünvan" class="form-control" id="parametr_unvan" value="<?php echo $parametr_Cavab['parametr_unvan'] ?>"/>
                                            </div>
                                           
                                            <div class="text-end">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="elaqeParametr_yenile">Yenilə</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                            
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

<?php require_once './footer.php' ?>