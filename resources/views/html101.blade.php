<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop02-67160127-g2</title>

    <style>
        body {
            background-color: #1e90ff; /* Blue background */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, textarea {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        button {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #resetBtn { background: #ff4d4d; color: white; }
        #saveBtn { background: #4caf50; color: white; }
    </style>
</head>
<body>

<div class="container">

    <div class="form-group">
        <label for="fname">First name</label>
        <input type="text" id="fname" name="fname">
    </div>

    <div class="form-group">
        <label for="sname">Last name</label>
        <input type="text" id="sname" name="sname">
    </div>

    <div class="form-group">
        <label for="inputPassword6">Password</label>
        <input type="password" id="inputPassword6">
    </div>

    <div class="form-group">
        <label for="birthDate">Birth Date</label>
        <input type="date" id="birthDate">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" id="age">
    </div>

    <div class="form-group">
        <label>Gender</label>
        <label><input type="checkbox"> Male</label>
        <label><input type="checkbox"> Female</label>
    </div>

    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" id="picture">
    </div>

    <div class="form-group">
        <label>Address</label>
        <textarea rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="favorite-color">Favorite Color</label>
        <select id="favorite-color">
            <option value="red">Red</option>
            <option value="white">White</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
        </select>
    </div>

    <div class="form-group">
        <label for="favorite-song-genre">Favorite Song Genre</label>
        <select id="favorite-song-genre">
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="country">Country</option>
            <option value="heavy-metal">Heavy Metal</option>
        </select>
    </div>

    <div class="form-group">
        <label><input type="checkbox" id="agree"> Agree to collect data</label>
    </div>

    <div class="button-group">
        <button type="button" id="resetBtn">Reset</button>
        <button type="button" id="saveBtn">Save</button>
    </div>

</div>

<script>
    document.getElementById("resetBtn").addEventListener("click", () => {
        location.reload();
    });
</script>

</body>
</html>
