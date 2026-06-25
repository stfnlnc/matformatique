<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body
    style="margin: 0; padding: 0; background-color: #ffffff; font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; -webkit-text-size-adjust: none;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="100%" max-width="600px" border="0" cellspacing="0" cellpadding="0"
                    style="max-width: 600px; background-color: #ffffff;border: 1px solid #c0d3ef; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03); overflow: hidden;">
                    <tr>
                        <td style="padding: 30px; background-color: #08286c; text-align: left;">
                            <h1 style="margin: 0; font-size: 24px; color: #ffffff; font-weight: 700;">
                                M@tformatique
                            </h1>
                            <p style="margin: 5px 0 0 0; font-size: 14px; color: #c0d3ef;">
                                Nouveau message reçu depuis le formulaire
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                style="margin-bottom: 25px;">
                                <tr>
                                    <td style="padding-bottom: 12px; border-bottom: 1px solid #e3e6ee;">
                                        <span
                                            style="display: block; font-size: 12px; font-weight: 600; color: #486da5; text-transform: uppercase; letter-spacing: 0.5px;">Nom</span>
                                        <span
                                            style="font-size: 16px; color: #08286c; font-weight: 600;">{{ $contact->name }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; border-bottom: 1px solid #e3e6ee;">
                                        <span
                                            style="display: block; font-size: 12px; font-weight: 600; color: #486da5; text-transform: uppercase; letter-spacing: 0.5px;">Email</span>
                                        <a href="mailto:{{ $contact->email }}"
                                            style="font-size: 16px; color: #08286c; text-decoration: none; font-weight: 600;">{{ $contact->email }}</a>
                                    </td>
                                </tr>
                                @if ($contact->phone)
                                    <tr>
                                        <td style="padding: 12px 0; border-bottom: 1px solid #e3e6ee;">
                                            <span
                                                style="display: block; font-size: 12px; font-weight: 600; color: #486da5; text-transform: uppercase; letter-spacing: 0.5px;">Téléphone</span>
                                            <a href="tel:{{ $contact->phone }}"
                                                style="font-size: 16px; color: #08286c; text-decoration: none; font-weight: 600;">{{ $contact->phone }}</a>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                            <div style="background-color: #f8fafc; padding: 20px; border-radius: 8px;">
                                <span
                                    style="display: block; font-size: 12px; font-weight: 600; color: #486da5; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">Message</span>
                                <p
                                    style="margin: 0; font-size: 15px; color: #08286c; line-height: 1.6; white-space: pre-line;">
                                    {{ $contact->message }}</p>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td
                            style="padding: 20px 30px; background-color: #f1f5f9; text-align: center; border-top: 1px solid #e3e6ee;">
                            <p
                                style="margin: 0; font-size: 12px; color: #486da5; text-transform: uppercase; letter-spacing: 0.5px;">
                                ● M@tformatique
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
