<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <p>This to this form</p>
    <form action="thanks.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="phone_number">Teléphone :</label>
            <input type="phone_number" id="phone_number" name="user_phone_number">
        </div>
        <div>
            <label for="subject">Subject</label>
            <select name="subjects" id="subject_select">
                <option value="">--Please select your subject--</option>
                <option value="plainte">je veux me plaindre</option>
                <option value="autographe">signez ma fesse droite svp</option>
                <option value="recrutement">postuler</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>

    </form>
</body>

</html>