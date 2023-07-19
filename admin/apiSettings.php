<?php require_once './header.php' ?>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Parametrlər</a></li>
                                            <li class="breadcrumb-item active">APİ Parametrləri</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Parametrlər</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">APİ Parametrləri 
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
                                                <label for="vebApiXerite" class="form-label">Xəritə APİ-si<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_xerite" parsley-trigger="change" required placeholder="Xəritə APİ-si" class="form-control" id="parametr_xerite" value="<?php echo $parametr_Cavab['parametr_xerite'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebApiAnaliz" class="form-label">Analiz APİ-si<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_analiz" parsley-trigger="change" required placeholder="Analiz APİ-si" class="form-control" id="parametr_analiz" value="<?php echo $parametr_Cavab['parametr_analiz'] ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="vebApiDestek" class="form-label">Canlı Dəstək APİ-si<span class="text-danger">*</span></label>
                                                <input type="text" name="parametr_destek" parsley-trigger="change" required placeholder="Canlı Dəstək APİ-si" class="form-control" id="parametr_destek" value="<?php echo $parametr_Cavab['parametr_destek'] ?>"/>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="apiParametr_yenile">Yenilə</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div> 
<?php require_once './footer.php' ?>