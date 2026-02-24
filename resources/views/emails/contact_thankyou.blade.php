<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Contacting Us</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

    <table align="center" width="100%" cellpadding="0" cellspacing="0" 
           style="max-width:600px; margin:40px auto; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.05);">

        <!-- Header -->
        <tr>
            <td style="background-color:#3A3A3A; padding:25px; text-align:center;">
                
                <!-- Logo -->
                <img src="{{ $message->embed(public_path('assets/images/logo_main3.png')) }}" 
                     alt="Udyog Granite Logo"
                     style="max-height:60px; margin-bottom:15px;">
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:35px 30px; color:#444444; line-height:1.6;">

                <h2 style="margin-top:0; color:#3A3A3A;">
                    Thank You, {{ $name }}!
                </h2>

                <p style="font-size:15px;">
                    We have successfully received your message. Our team truly appreciates you reaching out to us.
                </p>

                <p style="font-size:15px;">
                    One of our representatives will review your inquiry and get back to you as soon as possible.
                </p>

                <div style="margin:25px 0; padding:15px; background:#f4f6f8; border-left:4px solid #A0D25D; border-radius:4px;">
                    <p style="margin:0; font-size:14px; color:#555;">
                        If your matter is urgent, feel free to contact us directly.
                    </p>
                </div>

                <p style="margin-top:30px; font-size:14px;">
                    Regards,<br>
                    <strong style="color:#3A3A3A;">Udyog Granite Team</strong>
                </p>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#f4f6f8; text-align:center; padding:15px; font-size:12px; color:#888;">
                © {{ date('Y') }} Udyog Granite. All Rights Reserved.
            </td>
        </tr>

    </table>

</body>
</html>