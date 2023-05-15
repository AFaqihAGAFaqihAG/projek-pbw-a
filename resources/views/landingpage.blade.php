<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Berbasis Web A</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link   -->
    @vite('resources/css/style.css')
    <link rel="stylesheet" href="css/style.css">

    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">LAPTOP</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#services">Services & Support</a>
        <a href="#about">About Us & Privacy Policy</a>
        <a href="#recommended">Recommended</a>
        <a href="#information">Information</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
        @if (Auth::check())
            <a href="{{ url('editdata') }}">Edit</a>
            <a href="{{ url('') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
        @else
            <a href="{{ route('register') }}">Register</a>
        @endif
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>develop your knowledge about laptops with us</h3>
        <p>Laptop adalah perangkat komputer yang portabel dan mudah dibawa-bawa.</p>
    </div>

    <div class="image">
        <img src="images/rocket.svg" alt="">
    </div>

    <div class="cloud cloud-1"></div>
    <div class="cloud cloud-2"></div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> Our <span>Services & Support</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3>Information Of LAPTOP</h3>
            <p>Bingung ingin mencari informasi? Kami solusinya.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>Information Of Market</h3>
            <p>Bingung ingin mencari pasar Laptop? Kami solusinya.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>Informasi Peluncuran</h3>
            <p>Bingung ingin melihat rilis keluaran Laptop terbaru? Kami solusinya.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-4.png" alt="">
            <h3>Informasi Kenaikan Harga Laptop</h3>
            <p>Bingung ingin melihat kenaikan harga Laptop dari yang murah kee yang mahal? Kami solusinya.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-5.png" alt="">
            <h3>Informasi Pajak</h3>
            <p>Bingung ingin melihat banyak pajak yang dikeluarkan oleh Laptop? Kami solusinya.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-6.png" alt="">
            <h3>Informasi Jual Beli Laptop Bekas</h3>
            <p>Bingung ingi mencari informasi tentang jual beli Laptop bekas? Kami solusinya.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>About Us</span> & Privacy policy </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3 class="title">big projects start with big dreams</h3>
            <p>Kebijakan Privasi [Nama Website]

                Kami menghargai privasi pengunjung kami di LAPTOP. Kebijakan privasi ini menjelaskan jenis informasi pribadi yang kami terima dan kumpulkan saat Anda mengunjungi LAPTOP, serta bagaimana kami menggunakan informasi tersebut.</p>
            <a href="#" class="btn">learn more</a>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-book"></i>
                    <h3>Di LAPTOP, kami berkomitmen untuk memberikan informasi yang akurat, bermanfaat, dan mudah dipahami. Tim kami terdiri dari para ahli di bidang [bidang keahlian] yang berdedikasi untuk memberikan solusi terbaik untuk masalah yang dihadapi pengguna kami.</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-user"></i>
                    <h3>This website was created by 2 peoples. </h3>
                    <p>Firdaus & Faqih </p>
                </div>
                <div class="icons">
                    <i class="fas fa-project-diagram"></i>
                    <h3>4 projects completed</h3>
                    <p>PBO Game Katak (Firdaus) </p>
                    <p>PBO Game Katak (Faqih) </p>
                    <p>PBO Project UAS (Firdaus) </p>
                    <p>PBO Project UAS (Faqih) </p>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- recommended section starts   -->

<section class="recommended" id="recommended">

    <h1 class="heading"> Our <span>Recommended</span> </h1>

    <div class="box-container">

        @php
            $counter = 1;
        @endphp

        @foreach($laptopList as $item)
        <a href="{{ route('laptop.details', ['item' => $item]) }}">
                <div class="box">
                    <span>{{ str_pad($counter, 2, '0', STR_PAD_LEFT) }}</span>
                    <img src="{{ asset('images/' . $item->image_path) }}" alt="">
                    <div class="content">
                        <h3 style="text-align: center">{{ $item->model }}</h3>
                        <p style="text-align: center">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        <p style="text-align: center">{{ $item->processo }}</p>
                        <p style="text-align: center">{{ $item->ram }}</p>
                        <p style="text-align: center">{{ $item->storage }}</p>
                        <p style="text-align: center">{{ $item->port }}</p>
                        <p style="text-align: center">{{ number_format($item->weight/1000, 3, ',', '.') }} kg</p>
                    </div>
                </div>
            </a>
            @php
                $counter++;
            @endphp
        @endforeach

    </div>

</section>

<!-- recommended section ends -->

<!-- information section starts  -->

<section class="information" id="information">

    <h1 class="heading"> Our <span>Information</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>basic class</h3>
            <img src="images/Laptop 3.png" alt="">
            <div class="price"> <span>$</span>369.98<span></span> </div>
            <ul>
                <li>ASUS Vivobook 14 Laptop</li>
                <li>Brand	ASUS</li>
                <li>Screen Size	14 Inches</li>
                <li>Color	Gray</li>
                <li>Hard Disk Size	512 GB</li>
                <li>CPU Model	Core I3 1115G4</li>
                <li>Ram Memory Installed Size	12 GB</li>
            </ul>
            <a href="#" class="btn">choose </a>
        </div>

        <div class="box">
            <h3>standard class</h3>
            <img src="images/laptop 2.png" alt="">
            <div class="price"> <span>$</span>810.15<span></span> </div>
            <ul>
                <li>Acer Nitro 5 AN515-57-79TD Gaming Laptop</li>
                <li>Brand	Acer</li>
                <li>Series	AN515-57-79TD</li>
                <li>Screen Size	15.6 Inches</li>
                <li>Color	Black</li>
                <li>Hard Disk Size	512</li>
                <li>Ram Memory Installed Size	8 GB</li>
            </ul>
            <a href="#" class="btn">choose </a>
        </div>

        <div class="box">
            <h3>premium class</h3>
            <img src="images/Laptop 4.png" alt="">
            <div class="price"> <span>$</span>2,668.96<span></span> </div>
            <ul>
                <li>Acer Predator Triton 500 SE Gaming/Creator Laptop</li>
                <li>Brand	Acer</li>
                <li>Screen Size	16 Inches</li>
                <li>Color	Gray</li>
                <li>CPU Model	Core i9</li>
                <li>Ram Memory Installed Size	32 GB</li>
            </ul>
            <a href="#" class="btn">choose </a>
        </div>

    </div>

</section>

<!-- information section ends -->

<!-- reivew section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Client's <span>Review</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="user">
                <img src="images/Ilhaam.jpg" alt="">
                <div class="info">
                    <h3>Ilhaam Ghiffary</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>Luar biasa! Tampilannya sangat menarik dan mudah dinavigasi.
                Terima kasih atas pengalaman penggunaan website yang luar biasa ini.
                Saya sangat terkesan dengan desain dan fungsionalitas website ini.
                Website ini sangat membantu dan informatif, terima kasih banyak!
                Saya sangat suka dengan cara website ini mempresentasikan informasi dengan jelas dan ringkas.</p>
            <p>Desain website ini sangat estetis dan modern, sangat menyenangkan untuk dilihat.
                Website ini sangat mudah digunakan, bahkan bagi pengguna yang kurang terampil dalam menggunakan teknologi.
                Terima kasih atas usaha yang telah dilakukan dalam menciptakan website yang luar biasa ini.
                Saya sangat terkesan dengan kualitas konten dan fitur-fitur website ini.
                Website ini sangat profesional dan memberikan pengalaman penggunaan yang menyenangkan.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/Aulia.jpg" alt="">
                <div class="info">
                    <h3>Aulia Muzhaffar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>Luar biasa! Website ini benar-benar menakjubkan!
                Saya sangat terkesan dengan tampilan dan pengalaman pengguna di website ini.
                Bravo! Desain dan konten website ini sangat profesional.
                Website ini sangat mudah dinavigasi dan informasinya sangat informatif.
                Terima kasih atas pengalaman yang luar biasa di website ini.</p>
            <p>Karya yang luar biasa! Website ini benar-benar mengesankan.
                Saya sangat terkesan dengan upaya dan perhatian yang diberikan pada setiap detail di website ini.
                Tampilan website ini sangat menarik dan modern.
                Saya suka cara website ini menyampaikan informasi dengan jelas dan mudah dipahami.
                Website ini memberikan pengalaman pengguna yang luar biasa, terima kasih sudah membuatnya!</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/Riyad.jpg" alt="">
                <div class="info">
                    <h3>Riyadhus shadiqin</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <i class="fas fa-quote-right"></i>
            </div>
            <p>Luar biasa! Desain web ini sangat menakjubkan.
                Terima kasih sudah membuat pengalaman pengguna yang luar biasa di situs ini.
                Saya sangat terkesan dengan tampilan yang modern dan profesional dari situs ini.
                Sangat mudah digunakan dan navigasi di situs ini terasa sangat lancar.
                Konten yang disajikan sangat informatif dan bermanfaat.</p>
            <p>Saya menyukai desain responsif yang memungkinkan situs ini dapat diakses dari berbagai perangkat.
                Bravo! Situs ini memang dibuat dengan kualitas yang tinggi.
                Terima kasih sudah menyediakan fitur-fitur yang berguna dan mempermudah pengguna.
                Saya sangat menghargai usaha yang telah dilakukan untuk membuat situs ini.
                Situs ini benar-benar membuat saya ingin kembali mengunjunginya lagi dan lagi.</p>
        </div>

    </div>

</section>

<!-- reivew section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span> Us </h1>

    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our phone & whatsapp </h3>
            <p>+62 852-6927-0159 (Firdaus) </p>
            <p>+62 895-3362-82090 (faqih) </p>
        </div>
        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>mhdfir212@gmail.com</p>
            <p>ahmadfaqih@gmail.com</p>
        </div>
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our location</h3>
            <p>Banda Aceh, Aceh, Indonesia - 23111</p>
        </div>
    </div>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.985585608237!2d95.36342522277221!3d5.569147783047381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037b98ba13e41%3A0x93d7ebf4986961a9!2sFaculty%20of%20Mathematics%20and%20Sciences%20Universitas%20Syiah%20Kuala!5e0!3m2!1sen!2sin!4v1680630429431!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Number" class="box">
            <textarea name="" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Lhokseumawe </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Banda Aceh </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Aceh Besar </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Bireuen </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Lhoksukon </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#services"> <i class="fas fa-arrow-right"></i> Services & Support </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> About Us & Privacy Policy </a>
            <a href="#recommended"> <i class="fas fa-arrow-right"></i> Recommended </a>
            <a href="#information"> <i class="fas fa-arrow-right"></i> Information </a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> Review </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> Contact </a>
        </div>

        <div class="box">
            <h3>Our Services & Support</h3>
            <a href="#"> <i class="fas fa-check"></i> Information of Laptop </a>
            <a href="#"> <i class="fas fa-check"></i> Information of Marketing </a>
            <a href="#"> <i class="fas fa-check"></i> Informasi Peluncuren </a>
            <a href="#"> <i class="fas fa-check"></i> Informasi Kenaikan Harga Laptop</a>
            <a href="#"> <i class="fas fa-check"></i> Informasi Pajak </a>
            <a href="#"> <i class="fas fa-check"></i> Informasi Jual Beli Laptop Bekas </a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#contact"> <i class="fab fa-whatsapp"></i> whatsapp </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit">Created By <span>Firdaus & Faqih</span> | All Rights Reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
