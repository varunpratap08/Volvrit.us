<!-- contact.php -->
<div class="container">
    <style>
    .contact-badge {
        display: inline-flex;
        align-items: center;
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        padding: 6px 16px;
        margin-bottom: 15px;
        color: #959595;
        font-size: 14px;
        font-weight: 500;
        width: fit-content;
    }

    .contact-badge svg {
        margin-right: 8px;
        flex-shrink: 0;
    }

    .contact-heading {
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        font-weight: 600;
        line-height: 1.3;
        margin: 15px 0 25px;
    }

    .heading-line {
        display: block;
        margin-bottom: 5px;
    }

    .gradient-text {
        background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }
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

        /* Contact Section Layout */
        .contact-section {
            margin: 40px 0;
        }

        .content-wrapper {
            display: flex;
            gap: 40px;
            align-items: stretch;
        }

        .text-content, .image-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            flex-grow: 1;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            box-sizing: border-box;
        }

        .contact-form textarea {
            min-height: 120px;
            resize: vertical;
            flex-grow: 1;
        }

        .contact-form button {
            background: #007BFF;
            color: #fff;
            padding: 10px 24px;
            border: none;
            border-radius: 24px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px 0 0 0;
            width: 140px;
            text-align: center;
            display: block;
        }

        .contact-form button:hover {
            background: #0069d9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Testimonial Image Section */
        .testimonial-content {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .testimonial-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .testimonial-overlay {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 20px 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0) 100%);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            color: white;
            box-sizing: border-box;
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            object-fit: cover;
        }

        .testimonial-text {
            color: white;
            max-width: 100%;
            margin-bottom: 10px;
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }

        .testimonial-text p {
            font-style: italic;
            font-size: 15px;
            color: white;
            margin: 0;
            line-height: 1.6;
            font-weight: 400;
        }

        .testimonial-text p::before,
        .testimonial-text p::after {
            content: '"';
            font-size: 24px;
            color: #007BFF;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .content-wrapper {
                gap: 30px;
            }
            
            .testimonial-overlay {
                padding: 20px 25px;
            }
        }

        @media (max-width: 992px) {
            .content-wrapper {
                flex-direction: column;
                gap: 30px;
            }

            .image-content, .text-content {
                width: 100%;
            }

            .testimonial-image {
                min-height: 350px;
            }

            .testimonial-overlay {
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .contact-heading {
                font-size: 26px;
                line-height: 1.3;
            }

            .gradient-text {
                font-size: 26px;
            }

            .contact-form {
                padding: 20px;
            }

            .testimonial-overlay {
                padding: 15px 20px;
            }

            .user-avatar {
                width: 70px;
                height: 70px;
                margin-bottom: 12px;
            }

            .testimonial-text p {
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .contact-badge {
                font-size: 13px;
                padding: 5px 14px;
            }

            .contact-heading {
                font-size: 22px;
                margin: 10px 0 15px;
            }

            .gradient-text {
                font-size: 22px;
            }

            .contact-form {
                padding: 15px;
            }

            .contact-form input,
            .contact-form textarea {
                padding: 10px 12px;
                font-size: 13px;
            }

            .contact-form button {
                padding: 9px 20px;
                font-size: 13px;
                width: 120px;
            }

            .testimonial-overlay {
                padding: 12px 15px;
            }

            .user-avatar {
                width: 60px;
                height: 60px;
                margin-bottom: 10px;
            }

            .testimonial-text p {
                font-size: 13px;
                line-height: 1.5;
            }
        }

        @media (max-width: 400px) {
            .contact-heading {
                font-size: 20px;
            }

            .gradient-text {
                font-size: 20px;
            }

            .testimonial-overlay {
                padding: 12px;
            }
        }
        }
    </style>

    <div class="contact-section">
        <div class="content-wrapper">
            <div class="text-content">
                <div class="contact-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                        <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>What other says</span>
                </div>
                <h2 class="contact-heading">
                    <div class="heading-line">From idea to execution</div>
                    <div class="gradient-text">We simplify, build and scale</div>
                </h2>
                <form action="submit.php" method="POST" class="contact-form">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" placeholder="Messages" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="image-content">
                <div class="testimonial-content">
                    <img src="assets/images/home_contactus.png" alt="Background Image" class="testimonial-image">
                    <div class="testimonial-overlay">
                        <img src="assets/images/profile_icon.svg" alt="User" class="user-avatar">
                        <div class="testimonial-text">
                            <p class="fade-in" style="animation-delay: 0.4s;">
                            Evolvix delivers truly customized IT solutions in NYC that helped us move from outdated systems to seamless digital workflows.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>