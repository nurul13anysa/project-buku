<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f4f4f4;
        padding: 20px;
    }
    .container {
        max-width: 900px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .team-member {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
    }
    .team-member img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-right: 20px;
    }
    .team-member p {
        margin: 0;
    }
    .app-description {
        margin-top: 30px;
    }
    .school-image {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    h1, h2 {
        color: #333;
    }
    p {
        color: #555;
    }
    .back-button {
        margin-bottom: 20px;
    }
</style>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Tentang Kami - Discipline Book</h1>
        <a href="{{ route('dashboard.index') }}" class="btn btn-outline-secondary mb-3 back-button">Back</a>
        <img class="school-image" src="image/smkn1katapang.jpg" alt="SMKN 1 Katapang">
    
        <div class="team-member">
            <img src="image/nurul_anysa.jpg" alt="Nurul Anysa">
            <p>Nurul Anysa - Frontend Developer</p>
        </div>
        
        <div class="team-member">
            <img src="image/meilani.jpg" alt="Meilani">
            <p>Meilani - Backend Developer</p>
        </div>
        
        <div class="team-member">
            <img src="image/ai_salma.jpg" alt="Ai Salma">
            <p>Ai Salma - UI/UX Designer</p>
        </div>
        
        <div class="team-member">
            <img src="image/Dava.jpg" alt="Dava">
            <p>Dava - Database Administrator</p>
        </div>
        
        <div class="team-member">
            <img src="image/nike.jpg" alt="Nike">
            <p>Nike - Project Manager</p>
        </div>
        
        <div class="app-description">
            <h2>Deskripsi Aplikasi Discipline Book</h2>
            <p>
                Discipline Book adalah sebuah aplikasi yang dikembangkan untuk memudahkan SMKN 1 Katapang dalam mencatat dan mengelola data ketertiban siswa. Aplikasi ini memungkinkan pengguna untuk melakukan pencatatan disiplin siswa secara efisien dan terstruktur.
            </p>
            <p>
                Dengan Discipline Book, pengguna dapat melihat riwayat pelanggaran, tindakan disiplin yang diambil, serta memantau perubahan perilaku siswa dari waktu ke waktu. Aplikasi ini dirancang untuk meningkatkan efektivitas pengelolaan ketertiban di sekolah.
            </p>
        </div>
    </div>
    
</body>
</html>


<!-- Scripts for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

