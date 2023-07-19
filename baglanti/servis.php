<?php

require_once './qoshul.php';



// APİ Parametrlərinin Yenilənməsi - BAŞLANĞIC
if(isset($_POST['apiParametr_yenile'])){
    $parametr_yaddaSaxla=$db->prepare("UPDATE parametrler SET
    
    parametr_xerite=:parametr_xerite,
    parametr_analiz=:parametr_analiz,
    parametr_destek=:parametr_destek
    WHERE parametr_id=0
    ");
    $yenile=$parametr_yaddaSaxla->execute(array(
        'parametr_xerite'=>$_POST['parametr_xerite'],
        'parametr_analiz'=>$_POST['parametr_analiz'],
        'parametr_destek'=>$_POST['parametr_destek']
    ));
    if ($yenile){
        header("Location:../admin/apiSettings.php?status=success");
    } else {
        header("Location:../admin/apiSettings.php?status=error");

    }
}
// APİ Parametrlərinin Yenilənməsi - SON


// SOSİAL ŞƏBƏKƏ Parametrlərinin Yenilənməsi - BAŞLANĞIC
if(isset($_POST['sosialParametr_yenile'])){
    $parametr_yaddaSaxla=$db->prepare("UPDATE parametrler SET
    
    parametr_instagram=:parametr_instagram,
    parametr_facebook=:parametr_facebook,
    parametr_youtube=:parametr_youtube,
    parametr_google=:parametr_google,
    parametr_linkedin=:parametr_linkedin
    WHERE parametr_id=0
    ");
    $yenile=$parametr_yaddaSaxla->execute(array(
        'parametr_instagram'=>$_POST['parametr_instagram'],
        'parametr_facebook'=>$_POST['parametr_facebook'],
        'parametr_youtube'=>$_POST['parametr_youtube'],
        'parametr_google'=>$_POST['parametr_google'],
        'parametr_linkedin'=>$_POST['parametr_linkedin']
    ));
    if ($yenile){
        header("Location:../admin/socialSettings.php?status=success");
    } else {
        header("Location:../admin/socialSettings.php?status=error");

    }
}
// SOSİAL ŞƏBƏKƏ Parametrlərinin Yenilənməsi - SON


// ƏLAQƏ Parametrlərinin Yenilənməsi - BAŞLANĞIC
if(isset($_POST['elaqeParametr_yenile'])){
    $parametr_yaddaSaxla=$db->prepare("UPDATE parametrler SET
    
    parametr_telefonMobil=:parametr_telefonMobil,
    parametr_telefonSheher=:parametr_telefonSheher,
    parametr_mail=:parametr_mail,
    parametr_unvan=:parametr_unvan
    WHERE parametr_id=0
    ");
    $yenile=$parametr_yaddaSaxla->execute(array(
        'parametr_telefonMobil'=>$_POST['parametr_telefonMobil'],
        'parametr_telefonSheher'=>$_POST['parametr_telefonSheher'],
        'parametr_mail'=>$_POST['parametr_mail'],
        'parametr_unvan'=>$_POST['parametr_unvan']
    ));
    if ($yenile){
        header("Location:../admin/contactSettings.php?status=success");
    } else {
        header("Location:../admin/contactSettings.php?status=error");

    }
}
// ƏLAQƏ Parametrlərinin Yenilənməsi - SON



// SMTP Parametrlərinin Yenilənməsi - BAŞLANĞIC
if(isset($_POST['smtpParametr_yenile'])){
    $parametr_yaddaSaxla=$db->prepare("UPDATE parametrler SET
    
    parametr_smtpHost=:parametr_smtpHost,
    parametr_smtpPort=:parametr_smtpPort,
    parametr_smtpShifre=:parametr_smtpShifre
    WHERE parametr_id=0
    ");
    $yenile=$parametr_yaddaSaxla->execute(array(
        'parametr_smtpHost'=>$_POST['parametr_smtpHost'],
        'parametr_smtpPort'=>$_POST['parametr_smtpPort'],
        'parametr_smtpShifre'=>$_POST['parametr_smtpShifre']
    ));
    if ($yenile){
        header("Location:../admin/smtpSettings.php?status=success");
    } else {
        header("Location:../admin/smtpSettings.php?status=error");

    }
}
// SMTP Parametrlərinin Yenilənməsi - SON



// Veb Parametrlərinin Yenilənməsi - BAŞLANĞIC
if(isset($_POST['vebParametr_yenile'])){
    $parametr_yaddaSaxla=$db->prepare("UPDATE parametrler SET
    
    parametr_vebSaytinAdi=:parametr_vebSaytinAdi,
    parametr_bashliq=:parametr_bashliq,
    parametr_achiqlama=:parametr_achiqlama,
    parametr_acharSozler=:parametr_acharSozler,
    parametr_muellif=:parametr_muellif
    WHERE parametr_id=0
    ");
    $yenile=$parametr_yaddaSaxla->execute(array(
        'parametr_vebSaytinAdi'=>$_POST['parametr_vebSaytinAdi'],
        'parametr_bashliq'=>$_POST['parametr_bashliq'],
        'parametr_achiqlama'=>$_POST['parametr_achiqlama'],
        'parametr_acharSozler'=>$_POST['parametr_acharSozler'],
        'parametr_muellif'=>$_POST['parametr_muellif']
    ));
    if ($yenile){
        header("Location:../admin/webSettings.php?status=success");
    } else {
        header("Location:../admin/webSettings.php?status=error");

    }
}
// Veb Parametrlərinin Yenilənməsi - SON

?>