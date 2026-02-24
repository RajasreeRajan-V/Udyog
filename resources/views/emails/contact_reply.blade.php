<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reply</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f9; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f9; padding:30px 0;">
        <tr>
            <td align="center">

                <!-- Main Container -->
                <table width="600" cellpadding="0" cellspacing="0" 
                       style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 3px 10px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color:#3A3A3A; padding:20px; text-align:center;">
                            <img src="{{ $message->embed(public_path('assets/images/logo_main3.png')) }}" 
                                 alt="Company Logo" 
                                 style="height:50px; margin-bottom:10px;">
                            <h2 style="color:#A0D25D; margin:0;">Customer Support</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#333333;">

                            <p style="font-size:16px;">Hello <strong>{{ $contact->name }}</strong>,</p>

                            <p style="font-size:15px; margin-top:20px;">
                                Thank you for contacting us. Please find our response below:
                            </p>

                            <!-- Reply Box -->
                            <div style="margin-top:20px; padding:20px; background:#f9fafb; border-left:4px solid #A0D25D; border-radius:4px;">
                                <p style="margin:0; font-size:15px; line-height:1.7;">
                                    {!! nl2br(e($replyMessage)) !!}
                                </p>
                            </div>

                            <p style="margin-top:30px; font-size:15px;">
                                If you have any further questions, feel free to reply to this email.
                            </p>

                            <p style="margin-top:40px; font-size:15px;">
                                Best Regards,<br>
                                <strong>Your Company Team</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:13px; color:#777;">
                            © {{ date('Y') }} Your Company Name. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>