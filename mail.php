<?php
$nombre=$_POST["dzName"];
$correo=$_POST["dzEmail"];
$telefono=$_POST["telefono"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["dzMessage"];


$to = "contacto@momoingenieria.cl";
    $subject = "Nuevo mensaje desde la página";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: momoingenieria.cl <contacto@momoingenieria.cl>"."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $message = '<!doctype html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
    </head>
    <div class="">
        <div class="aHl"></div>
        <div id=":1x4" tabindex="-1"></div>
        <div id=":1wt" class="ii gt" jslog="20277; u014N:xr6bB; 4:W251bGwsbnVsbCxbXV0.">
            <div id=":1ws" class="a3s aiL msg8933270193983384670"><u></u>
    <div style="background-color:#fff;margin:0;padding:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#fff">
    <tbody>
        <tr>
            <td>
                <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#fff">
                    <tbody>
                        <tr>
                            <td>
                                <table class="m_8933270193983384670row-content m_8933270193983384670stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="color:#333;width:500px" width="500">
                                    <tbody>
                                        <tr>
                                            <td class="m_8933270193983384670column" width="50%" style="font-weight:400;text-align:left;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0">
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:100%;padding-right:0;padding-left:0;padding-top:20px;padding-bottom:5px">
                                                                <div align="center" style="line-height:10px"></div></td></tr></tbody></table></td>
                                                                    <td class="m_8933270193983384670column" width="50%" style="font-weight:400;text-align:left;vertical-align:top;border-top:0;border-right:0;border-bottom:0;border-left:0">
                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="word-break:break-word">
                                                                            <tbody>
                                                                                <tr>
                                                                                    
                                                                                    <div style="font-family:sans-serif">
                                                                                    <div style="text-align:right;font-size:12px;color:#6e6f7a;line-height:1.5;font-family:Arial,Helvetica Neue,Helvetica,sans-serif"><strong><span style="font-size:16px"></span></strong></div></div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
                                                                                    <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#fff">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="m_8933270193983384670column" width="100%" style="font-weight:400;text-align:left;vertical-align:top;padding-top:0;padding-bottom:0;border-top:0;border-right:0;border-bottom:0;border-left:0">
                                                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="word-break:break-word">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="padding-bottom:30px;padding-top:50px">
                                                                                                                <div style="font-family:sans-serif">
                                                                                                                    <div style="font-size:12px;color:#fff;line-height:1.2;font-family:Arial,Helvetica Neue,Helvetica,sans-serif"><p style="margin:0;font-size:14px;text-align:center;color: black!important;"><img src="https://momoingenieria.cl/logo.png"  width="191" alt="Image" title="Image" style="margin-bottom: 50px;"><br>Nombre: '.$nombre.'<br>Teléfono: '.$telefono.'<br>Correo: '.$correo.'<br>Asunto: '.$asunto.'<br><strong><span style="font-size:28px">'.$mensaje.'</span></strong></p></div></div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                        </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </td>
            </tr>
            </tbody>
            </table>
    
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </html>';
    
    mail($to, $subject, $message, $headers);
    $arr = array('status' => 1);
    echo json_encode($arr);
?>