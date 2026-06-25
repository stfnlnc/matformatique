<!DOCTYPE html>
<html>

<head>
    <title>Erreur API</title>
</head>

<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <h2 style="color: #d9534f;">Une erreur est survenue lors de l'appel à l'API Google Places</h2>
    <p>Bonjour,</p>
    <p>Le script de synchronisation des avis et horaires a rencontré un problème :</p>

    <div
        style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 20px 0; font-family: monospace;">
        {{ $errorMessage }}
    </div>

    <p>Le fichier local n'a pas été mis à jour pour éviter de corrompre les données existantes.</p>
    <hr>
    <p style="font-size: 12px; color: #777;">Ceci est un message automatique envoyé par ton application Laravel.</p>
</body>

</html>
