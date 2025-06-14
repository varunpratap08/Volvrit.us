<!-- contact.php -->
<div class="container">
    <style>
        /* Container (already defined in style.css, but adjusted for inline use) */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }

        /* Section Label */
        .section-label {
            color: #28a745;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        /* Headings */
        h2 {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            line-height: 1.3;
            margin: 10px 0;
        }

        h2 span {
            color: #007BFF;
        }

        /* Contact Section */
        .contact-section {
            display: flex;
            align-items: stretch;
            gap: 40px;
            margin: 40px 0;
        }

        .contact-form {
            flex: 1;
        }

        .contact-form form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }

        .contact-form textarea {
            min-height: 120px;
            resize: vertical;
        }

        .contact-form button {
            display: inline-block;
            background: #007BFF;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 400;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #0056b3;
        }

        .contact-testimonial {
            flex: 1;
            position: relative;
        }

        .testimonial-image {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .testimonial-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .testimonial-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: left;
            width: 80%;
        }

        .user-avatar {
            max-width: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 3px solid #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .testimonial-text {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
        }

        .testimonial-text p {
            font-style: italic;
            font-size: 16px;
            color: #666;
            position: relative;
        }

        .testimonial-text p::before,
        .testimonial-text p::after {
            content: '"';
            font-size: 24px;
            color: #007BFF;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
                text-align: center;
            }

            .contact-testimonial {
                margin-top: 20px;
            }

            .testimonial-bg {
                height: 300px;
            }

            .testimonial-overlay {
                width: 90%;
            }

            h2 {
                font-size: 24px;
            }
        }
    </style>

    <p class="section-label">What we say</p>
    <h2 class="fade-in">
        From idea, <span>execution</span>, build, and scale
    </h2>
    <div class="contact-section">
        <div class="contact-form">
            <form action="submit.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Messages" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="contact-testimonial">
            <div class="testimonial-image">
                <img src="assets/images/home_contactus.png" alt="Background Image" class="testimonial-bg">
                <div class="testimonial-overlay">
                    <img src="assets/images/profile_icon.svg" alt="User" class="user-avatar">
                    <div class="testimonial-text">
                        <p class="fade-in" style="animation-delay: 0.4s;">
                            "Contrary to popular belief, Lorem ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>