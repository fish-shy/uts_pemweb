<footer>
    <div class="footer-container">
        <div class="footer-column logo-contact">
                <img src="../assets/logo-footer.png" class="logo" alt="">
            
            <div class="about-us-footer">
                <h2>About Us</h2>
                <p>Our goal is to make the best baked goods out there</p>
            </div>
            <div class="contact-us">
                <h2>Contact US</h2>
                <p>+62 115 100 900</p>
                <p><a href="mailto:rayhandika@gmail.com">rayhandika@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-column">
            <h2>Information</h2>
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h2>Useful Link</h2>
            <ul>
                <li><a href="#">Product</a></li>
            </ul>
        </div>

        <div class="footer-column subscribe">
            <h2>Subscribe For More</h2>
            <form action="#">
                <input
                    type="email"
                    placeholder="you@example.com"
                    required />
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <hr class="footer-divider" />

    <div class="footer-bottom">
        <p>&copy; 2018 companyLtd All right reserved</p>
    </div>
</footer>

<style>
    body {
        margin: 0;
        font-family: sans-serif;

    }

    footer {
        background-color: #000000;
        color: #cccccc;
        padding: 50px 5% 20px 5%;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding-bottom: 30px;
    }

    .footer-column {
        flex: 1;
        min-width: 200px;
    }

    .footer-column h2 {
        color: #d9a64e;
        font-size: 1.1em;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .footer-column p,
    .footer-column li {
        font-size: 0.9em;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-column a {
        color: #cccccc;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-column a:hover {
        color: #ffffff;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        margin-right:20px ;
        color: #ffffff;
        width:60px;
        height: auto;
    }
    .about-us-footer,
    .contact-us {
        margin-bottom: 25px;
    }

    .contact-us p {
        margin-bottom: 5px;
    }

    .subscribe h2 {
        margin-bottom: 15px;
    }

    .subscribe input[type="email"] {
        width: calc(100% - 22px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
        background-color: #ffffff;
        color: #333333;
    }

    .subscribe button {
        padding: 10px 20px;
        background-color: #333333;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .subscribe button:hover {
        background-color: #555555;
    }

    .footer-divider {
        border: 0;
        border-top: 1px solid #444444;
        margin: 20px auto;
        max-width: 1200px;
    }

    .footer-bottom {
        text-align: right;
        font-size: 0.8em;
        color: #aaaaaa;
        max-width: 1200px;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-column {
            min-width: 100%;
            margin-bottom: 20px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 10px;
        }
    }
</style>