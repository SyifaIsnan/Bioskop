<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="navbar">
        <h1><a href="index.php">FilmBioskop</a></h1>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="tambah.php">Tambah Film</a></li>
        <li><a href="login.php">Login</a></li>
        </ul>
    </div>
    
    <div class="main-tambah">
        <form action="">
            <div class="tambah">
                <h2>Tambah Film</h2>

                <label for="poster">Poster</label><br>
                <input type="file" name="poster" id="poster"><br><br>

                <label for="judul">Judul</label><br>
                <input type="judul" name="judul" id="judul"><br><br>

                <label for="genre">Genre</label><br> <br>
                <div class="genre">
                    <select name="" id="">
                        <option value="">Pilih Genre</option>
                        <option value="">Thriller</option>
                        <option value="">Horror</option>
                        <option value="">Comedy</option>
                        <option value="">Romance</option>
                        <option value="">Sci-Fi</option>
                    </select> <br> <br>
                </div>
               
                <label for="">Tahun Produksi</label><br> 
                <input type="text" name="tahun" id="tahun"><br><br>

                <label for="">Sinopsis</label><br> <br>
                <textarea name="" id="" cols="93" rows="10"></textarea> <br><br>

                <label for="">Durasi</label><br>
                <input type="text" name="durasi" id="durasi"><br><br>

                <label for="">Cast/Aktor</label><br>
                <input type="text" name="" id=""><br><br>

                <label for="">Rating</label><br>
                <input type="" name="" id=""><br><br>   


                
                <button>SUBMIT</button>
            </div>
            
        </form>
    </div>

</body>
</html>