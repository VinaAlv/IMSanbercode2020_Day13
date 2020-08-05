<!DOCTYPE html>

<head>
    <title>Form SIGN UP</title>
    <meta charset="UTF-8">
</head>

<body>
    <div>
        <h2>Buat Account Baru!</h2>
        <h4>Sign Up Form</h4>

        <form action="/Welcome" method="post">
        @csrf
            <label for="nama_awal_user"> First name : </label> <br> <br>
            <input type="text" name=first_name id="nama_awal_user"> <br> <br>

            <label for="nama_akhir_user"> Last name : </label> <br> <br>
            <input type="text" name=last_name id="nama_akhir_user"> <br> <br>

            <label > Gender : </label> <br> <br>
            <input type="radio" name="Jenis_kelamin" value="1"> Male <br>
            <input type="radio" name="Jenis_kelamin" value="2"> Female <br>
            <input type="radio" name="Jenis_kelamin" value="3"> Other <br>

            <br> 

            <label > Nationality:</label>
            <br> <br>
            <select >
                <option value="1"> Indonesian</option>
                <option value="2"> Singaporean</option>
                <option value="3">Malaysian</option>
                <option value="4">Australian</option>
            </select>

            <br> <br>
            <label > Language Spoken:</label> <br> <br>
            <input type="Checkbox" name="bahasa" value="1"> Bahasa Indonesia <br>
            <input type="Checkbox" name="bahasa" value="2"> English <br>
            <input type="Checkbox" name="bahasa" value="3"> Other <br> <br>

            <label for="Bio_user"> Bio:</label> <br> <br>
            <textarea name="Biografi" id="Bio_user" cols="30" rows="10"></textarea>

            <br> 

            <input type="submit" value="Sign Up" >
            
        </form>        
    </div>
  
</body>