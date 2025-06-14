<div class="container process-container">
    <div class="process-content">
        <p style="color: #28a745; font-size: 14px; margin: 0 0 10px 0;">What we do</p>
        <h2>From idea, <span style="color: #007BFF;">execution</span>, build, and scale</h2>
        <p class="subtitle">
            There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't even look slightly believable.
        </p>
    </div>
    <div class="process-grid">
        <div class="process-card fade-in">
            <div class="card-content">
                <div class="card-icon">
                    <img src="assets/images/process_icon1.svg" alt="Discover Icon">
                </div>
                <h3>Discover</h3>
                <p>Drive your business goals, create the strategy and achieve them with our help.</p>
            </div>
        </div>
        <div class="process-card fade-in">
            <div class="card-content">
                <div class="card-icon">
                    <img src="assets/images/process_icon2.svg" alt="Strategize Icon">
                </div>
                <h3>Strategize</h3>
                <p>Create a clear roadmap to achieve your goals and achieve them with our help.</p>
            </div>
        </div>
        <div class="process-card fade-in">
            <div class="card-content">
                <div class="card-icon">
                    <img src="assets/images/process_icon3.svg" alt="Design & Develop Icon">
                </div>
                <h3>Design & Develop</h3>
                <p>Launch your product, iterate and achieve your goals with our help.</p>
            </div>
        </div>
        <div class="process-card fade-in">
            <div class="card-content">
                <div class="card-icon">
                    <img src="assets/images/process_icon4.svg" alt="Deploy & Evolve Icon">
                </div>
                <h3>Deploy & Evolve</h3>
                <p>Launch your product, iterate and achieve your goals with our help.</p>
            </div>
        </div>
    </div>
</div>

<style>
.process-container {
    display: flex;
    gap: 40px;
    align-items: flex-start;
    padding: 60px 0;
}

.process-content {
    flex: 1;
    max-width: 400px;
    position: sticky;
    top: 100px;
}

.process-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #333;
}

.process-content .subtitle {
    font-size: 1.1rem;
    color: #666;
    line-height: 1.6;
}

.process-grid {
    flex: 2;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.process-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #eee;
}

.process-card .card-content {
    padding: 30px 25px;
    text-align: left;
}

.card-icon {
    width: 70px;
    height: 70px;
    margin: 0 0 20px 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    /* background: rgba(0, 123, 255, 0.1); */
    border-radius: 50%;
    transition: all 0.3s ease;
}

/* .process-card:hover .card-icon {
    background: #007BFF;
    transform: translateY(-3px);
} */

/* .process-card:hover .card-icon svg {
    stroke: #fff;
} */

.process-card h3 {
    font-size: 1.3rem;
    margin-bottom: 12px;
    color: #2c3e50;
}

.process-card p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.process-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* Animation for fade-in effect */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.fade-in {
    animation: fadeIn 0.6s ease forwards;
    opacity: 0;
}

.fade-in:nth-child(1) { animation-delay: 0.1s; }
.fade-in:nth-child(2) { animation-delay: 0.2s; }
.fade-in:nth-child(3) { animation-delay: 0.3s; }
.fade-in:nth-child(4) { animation-delay: 0.4s; }

/* Responsive Design */
@media (max-width: 992px) {
    .process-container {
        flex-direction: column;
        gap: 30px;
    }
    
    .process-content {
        max-width: 100%;
        position: static;
        text-align: center;
    }
    
    .process-grid {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .process-grid {
        grid-template-columns: 1fr;
    }
    
    .process-card {
        max-width: 100%;
    }
}
</style>