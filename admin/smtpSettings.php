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
                                            <li class="breadcrumb-item active">SMTP Parametrləri</li>
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
                                        <h4 class="header-title">SMTP Parametrləri 
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
                                                <label for="vebSaytinAdi" class="form-label">SMTP Host<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_smtpHost" parsley-trigger="change" required placeholder="SMTP Host" class="form-control" id="parametr_smtpHost" value="<?php echo $parametr_Cavab['parametr_smtpHost'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">SMTP Port<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_smtpPort" parsley-trigger="change" required placeholder="SMTP Port" class="form-control" id="parametr_smtpPort" value="<?php echo $parametr_Cavab['parametr_smtpPort'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebSaytinAdi" class="form-label">SMTP Şifrə<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_smtpShifre" parsley-trigger="change" required placeholder="SMTP Şifrə" class="form-control" id="parametr_smtpShifre" value="<?php echo $parametr_Cavab['parametr_smtpShifre'] ?>"/>
                                            </div>
                                            
                                           
                                            <div class="text-end">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="smtpParametr_yenile">Yenilə</button>
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