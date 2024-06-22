<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
    background-color: #f0f8ff;
}
.navbar {
    background-color: #000B72;
    font-size: 1.3rem;
}
.navbar-brand, .nav-link {
    color: #ffffff !important;
    padding: 20px 20px;
}
.nav-link:hover {
    background-color: #5a9bd4 !important;
    color: #ffffff !important;
    border-radius: 5px;
}
.carousel-caption {
    background: rgba(0, 0, 0, 0.5);
    padding: 1rem;
}
.card {
    border: 1px solid #ff6347;
}
.card-footer {
    background-color: #ffebcd;
}
footer {
    background: #000B72;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}
.footer-content {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.footer-section {
    flex: 1;
    padding: 10px 15px;
    max-width: 300px;
}
.logo-text {
    font-size: 20px;
    font-weight: bold;
}
.contact span {
    display: block;
    margin-bottom: 8px;
}
.socials {
    margin-top: 10px;
}
.socials a {
    display: block;
    margin: 5px 0;
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}
.socials a i {
    margin-right: 8px;
}
.footer-section.contact-form .text-input {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    border: none;
    border-radius: 5px;
}
.footer-section.contact-form .btn {
    display: inline-block;
    padding: 8px 16px;
    background: #ff6b6b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.footer-bottom {
    padding: 10px;
    background: #4682b4;
    color: #aaa;
    text-align: center;
    font-size: 14px;
}
.btn-primary {
    background-color: #4682b4;
    border-color: #4682b4;
}
.btn-primary:hover {
    background-color: #5a9bd4;
    border-color: #5a9bd4;
}
.bg-custom {
    background-color: #ffebcd;
}
.text-custom {
    color: #ff6347;
}
.dino {
    position: relative;
    background-size: cover;
    z-index: 10;
    pointer-events: none;
}
.dino a {
    z-index: 20;
    position: relative;
    pointer-events: auto;
}
.carousel-inner img {
    height: 500px;
    object-fit: cover;
}
.footer-links {
    list-style: none;
    padding: 0;
}
.footer-links li {
    margin-bottom: 10px;
}
.footer-links a {
    color: #ffffff;
    text-decoration: none;
}
.footer-links a:hover {
    text-decoration: underline;
}
.achievements, .reasons {
    padding: 3rem 0;
}
.achievements h2, .reasons h2 {
    color: #ff6347;
    margin-bottom: 1.5rem;
}
.reasons ul {
    list-style: none;
    padding: 0;
}
.reasons ul li {
    background: #ffebcd;
    margin-bottom: 10px;
    padding: 15px;
    border-left: 5px solid #ff6347;
}
.achievement-img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    margin-bottom: 15px;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Electronic Publisher Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.create') }}">Publish Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.list') }}">Book List</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i = 0; $i < 3; $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDF8fGJvb2t8ZW58MHx8fHwxNjY1NzY0NzY0&ixlib=rb-1.2.1&q=80&w=1080" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Penerbit Buku Online kami</h5>
                        <p>Percayakan Buku Kalian kepada Kami</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fGJvb2t8ZW58MHx8fHwxNjY1NzY0NzY0&ixlib=rb-1.2.1&q=80&w=1080" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Penerbit Buku Online kami</h5>
                        <p>Percayakan Buku Kalian kepada Kami</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDF8fGJvb2t8ZW58MHx8fHwxNjY1NzY0NzY0&ixlib=rb-1.2.1&q=80&w=1080" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Selamat Datang di Penerbit Buku Online kami</h5>
                        <p>Percayakan Buku Kalian kepada Kami</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h1 class="text-center mb-4 mt-5 text-custom">Our Books</h1>
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-4 mb-3">
                <div class="card h-100 bg-custom">
                    <img src="{{ Storage::url($book->cover_image) }}" class="card-img-top" alt="{{ $book->title }}" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-custom">{{ $book->title }}</h5>
                        <p class="card-text">Author: {{ $book->author }}</p>
                        <p class="card-text">ISBN: {{ $book->isbn }}</p>
                        <p class="card-text">Pages: {{ $book->page }}</p>
                        <span class="badge badge-info">New</span>
                    </div>
                    <div class="card-footer">
                        <a href="{{ Storage::url($book->pdf) }}" class="btn btn-primary">See Book</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="achievements bg-light text-center">
        <div class="container">
            <h2>MENGAPA HARUS EPO?</h2>
            <p>Karna Kami Memiliki Beberapa Keunggulan</p>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('kunci.png') }}" class="img-fluid achievement-img" alt="Achievement 1">
                    <h5>Terjamin</h5>
                    <p>Layanan kami dijamin memberikan kualitas terbaik untuk setiap penerbitan buku</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('lampu.png') }}" class="img-fluid achievement-img" alt="Achievement 2">
                    <h5>Inovatif</h5>
                    <p>Kami selalu mencari inovasi baru untuk meningkatkan pengalaman penerbitan Anda</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('profesional.png') }}" class="img-fluid achievement-img" alt="Achievement 3">
                    <h5>Profesional</h5>
                    <p>Kami menangani setiap proyek dengan profesionalisme tinggi, memastikan kepuasan Anda</p>
                </div>
            </div>
        </div>
    </div>

    <div class="vision-mission bg-custom text-center">
        <div class="container">
            <h2>Visi dan Misi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3>Visi</h3>
                    <p>Menjadi penyedia layanan penerbitan buku online terkemuka yang memberikan inspirasi dan nilai tambah bagi setiap penerbitan buku.</p>
                </div>
                <div class="col-md-6">
                    <h3>Misi</h3>
                    <ul>
                        <li>Memberikan layanan editorial berkualitas tinggi.</li>
                        <li>Membangun jaringan distribusi yang luas.</li>
                        <li>Menyediakan royalti kompetitif kepada penulis.</li>
                        <li>Memberikan dukungan pemasaran yang komprehensif.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text"><span>Electronic Publisher Online</span></h1>
                <p>Jalan Parkit II,No 8a, Air Tawar Barat, Padang Utara</p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; +62 822 8751 6143</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; PTI F3/4@gmail.com</span>
                </div>
            </div>

            <div class="footer-section socials">
                <h2>Sosial Media</h2>
                <div class="socials">
                    <a href="https://www.youtube.com/akunAnda" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
                    <a href="https://www.instagram.com/delia.julianti" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="https://www.tiktok.com/@akunAnda" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a>
                </div>
            </div>

            <div class="footer-section contact-form">
                <h2>Hubungi Kami</h2>
                <form action="process_form.php" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Email Anda..." required>
                    <textarea name="message" class="text-input contact-input" placeholder="Pesan Anda..." required></textarea>
                    <button type="submit" class="btn btn-big"><i class="fas fa-envelope"></i> Kirim</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2024 Electronic Publisher Online
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
