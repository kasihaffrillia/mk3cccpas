<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Company Profile - Reservasi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                background-color: #f0f8ff; /* Light blue background */
                color: #212529;
            }

            /* Navbar Styles */
            .navbar {
                background-color: #007bff; /* Primary blue */
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .navbar .logo {
                font-size: 1.5rem;
                font-weight: bold;
                color: #fff;
            }
            .navbar ul {
                list-style: none;
                display: flex;
                margin: 0;
                padding: 0;
            }
            .navbar ul li {
                margin: 0 15px;
            }
            .navbar ul li a {
                color: #fff;
                text-decoration: none;
                font-size: 1rem;
                transition: color 0.3s;
            }
            .navbar ul li a:hover {
                color: #ffcccb; /* Soft red for hover effect */
            }

            /* Banner Styles */
            .banner {
                position: relative;
                background-image: url('{{ asset("output.png") }}');
                background-size: cover;
                background-position: center;
                height: 300px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            }
            .banner h1 {
                font-size: 2.5rem;
                font-weight: bold;
                text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            }
            .banner p {
                font-size: 1.2rem;
                text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            }

            /* Features Section */
            .feature-section {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin: 40px 0;
            }
            .feature-card {
                background-color: #ffffff; /* White card */
                border: 1px solid #007bff; /* Blue border */
                border-radius: 8px;
                margin: 10px;
                padding: 20px;
                width: 300px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .feature-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            }
            .feature-card h3 {
                margin: 10px 0;
                font-size: 1.25rem;
                color: #007bff; /* Blue for title */
            }
            .feature-card p {
                font-size: 1rem;
                color: #666;
            }

            /* Price Section */
            .price-section {
                background-color: #e6f7ff; /* Light blue */
                padding: 40px 20px;
                border-radius: 8px;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .price-title {
                font-size: 1.8rem;
                color: #007bff;
                margin-bottom: 20px;
            }
            .price-container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 20px;
            }
            .price-card {
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                width: 200px;
                padding: 20px;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .price-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            }
            .price-card img {
                width: 50px;
                height: 50px;
                margin-bottom: 10px;
            }
            .price-card h3 {
                font-size: 1.2rem;
                color: #007bff;
                margin-bottom: 10px;
            }
            .price-card p {
                font-size: 1rem;
                color: #333;
                margin-bottom: 10px;
            }
            .price-card .price {
                font-size: 1.5rem;
                font-weight: bold;
                color: #28a745; /* Green color for price */
            }

            /* Contact Section */
            .contact-section {
                background-color: #fff;
                padding: 40px 20px;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-top: 40px;
            }
            .contact-section h2 {
                font-size: 1.8rem;
                color: #007bff;
                margin-bottom: 20px;
            }
            .contact-form {
                max-width: 600px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
            .contact-form input, .contact-form textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 1rem;
            }
            .contact-form textarea {
                resize: vertical;
                height: 100px;
            }
            .contact-form button {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 1rem;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            .contact-form button:hover {
                background-color: #0056b3;
            }

                        /* Reservasi Section */
                        .reservasi-section {
                background-color: #fff;
                padding: 40px 20px;
                text-align: center;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-top: 40px;
                border-radius: 8px;
            }
            .reservasi-section h2 {
                font-size: 1.8rem;
                color: #007bff;
                margin-bottom: 20px;
            }
            .reservasi-form {
                max-width: 600px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
            .reservasi-form input, .reservasi-form select, .reservasi-form textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 1rem;
            }
            .reservasi-form textarea {
                resize: vertical;
                height: 100px;
            }
            .reservasi-form button {
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 1rem;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            .reservasi-form button:hover {
                background-color: #0056b3;
            }


            /* Testimoni Section */
            .testimoni-section {
                background-color: #e6f7ff; /* Light blue background */
                padding: 40px 20px;
                text-align: center;
                border-radius: 8px;
                margin-top: 40px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .testimoni-section h2 {
                color: #007bff; /* Blue title */
                font-size: 1.8rem;
                margin-bottom: 20px;
            }
            .testimoni-item {
                margin: 10px 0;
                font-size: 1rem;
                color: #333;
                line-height: 1.6;
            }
            .testimoni-item strong {
                display: block;
                color: #007bff; /* Highlighted name */
            }

            /* Footer Styles */
            footer {
                background-color: #007bff; /* Primary blue */
                color: #fff;
                text-align: center;
                padding: 15px 0;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="logo">KlikReservasi
            </div>
            <ul>
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#reservasi">Reservasi</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <div id="beranda" class="banner">
            <div>
                <h1>Welcome to Our Reservasi Service</h1>
                <p>Seamless reservations at your fingertips.</p>
            </div>
        </div>

        <!-- Pricing Section -->
        <section id="price" class="price-section">
            <h2 class="price-title">Pricing</h2>
            <div class="price-container">
                <div class="price-card">
                    <img src="https://via.placeholder.com/50" alt="Icon">
                    <h3>Basic Reservation</h3>
                    <p>Simple and quick booking.</p>
                    <div class="price">Rp 50.000</div>
                </div>
                <div class="price-card">
                    <img src="https://via.placeholder.com/50" alt="Icon">
                    <h3>Premium Reservation</h3>
                    <p>Advanced features and support.</p>
                    <div class="price">Rp 100.000</div>
                </div>
                <div class="price-card">
                    <img src="https://via.placeholder.com/50" alt="Icon">
                    <h3>VIP Reservation</h3>
                    <p>All-inclusive, top priority.</p>
                    <div class="price">Rp 200.000</div>
                </div>
            </div>
        </section>

                <!-- Reservasi Section -->
                <section id="reservasi" class="reservasi-section">
            <h2>Reservasi</h2>
            <form class="reservasi-form" action="#" method="POST">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <input type="date" name="tanggal" required>
                <select name="jenis_reservasi" required>
                    <option value="" disabled selected>Pilih Jenis Reservasi</option>
                    <option value="Basic">Basic</option>
                    <option value="Premium">Premium</option>
                    <option value="VIP">VIP</option>
                </select>
                <textarea name="catatan" placeholder="Catatan Tambahan"></textarea>
                <button type="submit">Kirim Reservasi</button>
            </form>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <h2>Hubungi Kami</h2>
            <form class="contact-form" action="#" method="POST">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </section>

        <!-- Testimoni Section -->
        <section id="testimoni" class="testimoni-section">
            <h2>Testimoni</h2>
            <div class="testimoni-item">
                <p>"Reservasi ini sangat membantu bisnis saya!"</p>
                <strong>- John Doe</strong>
            </div>
            <div class="testimoni-item">
                <p>"Mudah digunakan dan sangat efisien."</p>
                <strong>- Jane Smith</strong>
            </div>
            <div class="testimoni-item">
                <p>"Fitur real-time update sangat berguna untuk bisnis restoran kami."</p>
                <strong>- Michael Lee</strong>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; {{ date('Y') }} Reservasi Inc. All rights reserved.</p>
        </footer>
    </body>
</html>
