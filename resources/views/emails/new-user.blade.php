<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>New User</title>
</head>

<body style="margin:0px; background: #f8f8f8; ">
    <div width="100%"
        style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <p>
                                    Hello <strong>{{ $data['fname'] }}! </strong>

                                    <br><br>

                                    Congratulations, you have been successfully selected.

                                    <br><br>

                                    Please login using this:

                                    <br><br>

                                    URL: {{ env('APP_URL') }}<br>
                                    Email: {{ $data['email'] }}<br>
                                    Password: {{ $password }}<br>

                                    <br><br>

                                    Best regards,
                                    <br>
                                    {{ env('MAIL_FROM_NAME') }}
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table border="0" style="width: 80%; padding:0;margin:0;margin:top:50px">
                    <tbody>
                        <tr>
                            <td style="padding:0;margin:0;color: #b2b2b5;font-size: 11px;">
                                <i>This email is auto-generated. DO NOT REPLY. The information contained in this email
                                    message is CONFIDENTIAL and intended only for the individual to which it is
                                    addressed and protected under applicable laws.</i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
