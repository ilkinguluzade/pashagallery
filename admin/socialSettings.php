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
                                            <li class="breadcrumb-item active">Sosial Şəbəkə Parametrləri</li>
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
                                        <h4 class="header-title">Sosial Şəbəkə Parametrləri 
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
                                                <label for="vebInstagram" class="form-label">İnstagram Linki<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_instagram" parsley-trigger="change" required placeholder="İnstagram Hesab Linki" class="form-control" id="parametr_instagram" value="<?php echo $parametr_Cavab['parametr_instagram'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebFacebook" class="form-label">Facebook Linki<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_facebook" parsley-trigger="change" required placeholder="Facebook Hesab Linki" class="form-control" id="parametr_facebook" value="<?php echo $parametr_Cavab['parametr_facebook'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebYoutube" class="form-label">YouTube Linki<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_youtube" parsley-trigger="change" required placeholder="Youtube Kanal Linki" class="form-control" id="parametr_youtube" value="<?php echo $parametr_Cavab['parametr_youtube'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebLinkedin" class="form-label">LinkedIn Linki<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_linkedin" parsley-trigger="change" required placeholder="LinkedIn Linki" class="form-control" id="parametr_linkedin" value="<?php echo $parametr_Cavab['parametr_linkedin'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebGoogle" class="form-label">Google Linki<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_google" parsley-trigger="change" required placeholder="Google Linki" class="form-control" id="parametr_google" value="<?php echo $parametr_Cavab['parametr_google'] ?>"/>
                                            </div>
                                            
                                           
                                            <div class="text-end">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="sosialParametr_yenile">Yenilə</button>
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