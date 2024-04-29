<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="hehe.css">
</head>

<body>
     
    <form action="pg3.php" method="post">
        <div class="glassmorphism">
            <h1>Buat Account Baru</h1>
            <h2>Sign Up Form</h2>
            <label for="first">First name :</label>
            <br><br>
            <input type="text" id="first" placeholder="nama depan" name="first" required>
            <br><br>
            <label for="last">Last name :</label>
            <br><br>
            <input type="text" id="last" placeholder="nama belakang (opsional)" name="last" required>
            <br><br>
            
            <label for="Jenis Kelamin">Jenis Kelamin</label>
            <br><br>
            <!-- input radio name harus sama jika masih 1 pertanyaan -->
            <input type="radio" name="pilihan" value="Jantan" id="Jantan" required> 
            <label for="male">Male</label>
            <br>
            <input type="radio" name="pilihan" value="Betina" id="Betina" required>
            <label for="female">Female</label>
            <br>
            <input type="radio" name="pilihan" value="kresek alfamart" id="kresek alfamart" required>
            <label for="Kresek Alfamart">Kresek Alfamart</label>
            <br><br>

        <label for="Negara">Nationality</label>
        <br><br>
        <select name="Negara" id="negara">
            <option value="Indonesia">Indonesia</option>
                <option value="Amerika RRRRAAAAHHHHHHH WEE FOUND OILLLL 🦅🦅🦅">Amerika RRRRAAAAHHHHHHH WEE FOUND OILLLL 🦅🦅🦅</option>
                <option value="Dengklok barat">Dengklok Barat</option>
                <option value="Inggris">Inggris</option>
                <option value="Sunda Empire">Sunda Empire</option>
                <option value="Singapura">Singapura</option>
                <option value="Xina">Xina</option>
                <option value="Russia">Russia</option>
                <option value="Bekasi">Bekasi</option> 
                <option value="Mars">Mars</option> 
                <option value="Koriya">Koriya</option> 
                <option value="Kosambi">Kosambi</option> 
        </select><br><br>

        <p style="color: #fff;">Language Spoken</p>
        <input type="checkbox" id="indo" name="language[]" value="Indonesia">
        <label for="indo" style="color: #fff;">Bahasa Indonesia</label> <br>
        <input type="checkbox" id="english" name="language[]" value="Inggris"> 
        <label for="english" style="color: #fff;">English Language</label> <br>
        <input type="checkbox" id="Jepun" name="language[]" value="Jepun"> 
        <label for="Jepun" style="color: #fff;">Jepun</label> <br>
        <input type="checkbox" id="Jawa" name="language[]" value="Jawa"> 
        <label for="Jawa" style="color: #fff;">Jawa</label> <br>


        <br><br>
        <label for="bio">Bio</label>
        <textarea name="bio" id="bio" cols="37" rows="10" required></textarea>
        <br>
        </div>
        <button>Done!</button>
    </form>
</body>
</html>
