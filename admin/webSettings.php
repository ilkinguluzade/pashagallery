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
                                            <li class="breadcrumb-item active">Veb Parametrləri</li>
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
                                        <h4 class="header-title">Veb Parametrləri 
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
                                                <label for="vebSaytinAdi" class="form-label">Veb Saytın Adı<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_vebSaytinAdi" parsley-trigger="change" required placeholder="Veb Saytın adı" class="form-control" id="parametr_vebSaytinAdi" value="<?php echo $parametr_Cavab['parametr_vebSaytinAdi'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Veb Saytın Başlığı<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_bashliq" parsley-trigger="change" required placeholder="Veb Saytın adı" class="form-control" id="parametr_bashliq" value="<?php echo $parametr_Cavab['parametr_bashliq'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Veb Saytın Açıqlaması<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_achiqlama" parsley-trigger="change" required placeholder="Veb Saytın adı" class="form-control" id="parametr_achiqlama" value="<?php echo $parametr_Cavab['parametr_achiqlama'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Veb Saytın Açar Sözləri<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_acharSozler" parsley-trigger="change" required placeholder="Veb Saytın adı" class="form-control" id="parametr_acharSozler" value="<?php echo $parametr_Cavab['parametr_acharSozler'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">Veb Saytın Müəllifi<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_muellif" parsley-trigger="change" required placeholder="Veb Saytın adı" class="form-control" id="parametr_muellif" value="<?php echo $parametr_Cavab['parametr_muellif'] ?>"/>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="vebParametr_yenile">Yenilə</button>
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