@extends('layouts.master')

@section('title', 'About Us - Jhan\'s Collections')

@section('styles')
<style>
* {
    font-family: "Poppins", sans-serif;
}
body {
    padding-top: 90px;
    background: #f9f9f9;
    color: #111;
}
.hero {
    height: 60vh;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{asset('assets/Service Pages/v33.jpg')}}') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    margin-bottom: 40px;
    animation: fadeIn 1s ease;
}
.hero h1 {
    font-size: 3rem;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    animation: slideDown 1s ease;
}
.about-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 80px 10%;
    flex-wrap: wrap;
    animation: slideUp 1s ease;
}
.about-content {
    flex: 1;
    max-width: 600px;
    animation: slideLeft 1s ease;
}
.about-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #111;
    font-family: "Times New Roman", Times, serif;
}
.about-content p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #444;
    margin-bottom: 15px;
    font-family: "Times New Roman", Times, serif;
}
.about-btn {
    background-color: #111;
    color: #fff;
    padding: 12px 28px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-size: 1rem;
    transition: all 0.3s ease;
}
.about-btn:hover {
    background-color: #4bbc43;
    transform: scale(1.05);
}
.about-image {
    flex: 1;
    text-align: center;
    animation: slideRight 1s ease;
}
.about-image img {
    max-width: 100%;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}
.about-image img:hover {
    transform: scale(1.05);
}
.reviews-section {
    padding: 80px 10%;
    background: #fff;
    text-align: center;
}
.reviews-section h2 {
    font-family: 'Dancing Script', cursive;
    font-size: 3.5rem;
    font-weight: 700;
    color: #4bbc43;
    margin-bottom: 50px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    animation: bounce 1s ease;
}
.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}
.review-card {
    background: #f9f9f9;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    animation: fadeInUp 1s ease;
}
.review-card:hover {
    transform: translateY(-5px);
}
.review-card .stars {
    color: #f8b400;
    margin-bottom: 15px;
    font-size: 1.2rem;
}
.review-card p {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    margin-bottom: 20px;
    font-style: italic;
}
.reviewer h4 {
    margin: 0;
    color: #4bbc43;
    font-size: 1.1rem;
    font-weight: 600;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
@keyframes slideDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes slideUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes slideLeft {
    from { opacity: 0; transform: translateX(-30px); }
    to { opacity: 1; transform: translateX(0); }
}
@keyframes slideRight {
    from { opacity: 0; transform: translateX(30px); }
    to { opacity: 1; transform: translateX(0); }
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

@media (max-width: 768px) {
    body { padding-top: 60px; }
    .hero { height: 40vh; }
    .hero h1 { font-size: 2.5rem; }
    .about-section { flex-direction: column; padding: 50px 5%; text-align: center; }
    .about-content { max-width: 100%; margin-bottom: 30px; }
    .about-content h2 { font-size: 2rem; }
    .reviews-section { padding: 50px 5%; }
    .reviews-section h2 { font-size: 2.5rem; }
    .reviews-grid { grid-template-columns: 1fr; gap: 20px; }
    .review-card { padding: 20px; }
}
@media (max-width: 480px) {
    body { padding-top: 55px; }
}
</style>
@endsection

@section('content')
<section class="hero">
</section>

<section class="about-section">
    <div class="about-content">
        <h2>About Jhan's Collections</h2>
        <p>
            Jhan's Collections is a modern clothing brand that celebrates confidence,
            creativity, and timeless style. We design elegant outfits that blend luxury
            with everyday comfort for fashion lovers everywhere.
        </p>
        <p>
            Each piece is crafted with precision, passion, and purpose — turning your
            wardrobe into a story of sophistication and individuality.
        </p>
        <button class="about-btn" onclick="window.location.href='{{ route('home') }}'">Explore Our Story</button>
    </div>
    <div class="about-image">
        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=800&q=80" alt="About Jhan's Collections">
    </div>
</section>

<section class="reviews-section">
    <h2>Our Design Your Story</h2>
    <div class="reviews-grid">
        <div class="review-card">
            <div class="stars">★★★★★</div>
            <p>"Our diwali purchase is done in Jhans Collections this year.... We are very satisfied and happy with the varieties... We bought for our whole family around 6 members... Best Shop for family purchase... The rate was reasonable and their service was also good.. Would surely recommend for family purchases"</p>
            <div class="reviewer">
                <h4>✨ Pradeep Kumar ✨</h4>
            </div>
        </div>

        <div class="review-card">
            <div class="stars">★★★★★</div>
            <p>"One of the best family boutique shop in Coimbatore. Appreciate the team efforts for the wonderful collection with competitive price. Material quality is great! My family liked the collections very much. Staffs are so friendly and helpful!!"</p>
            <div class="reviewer">
                <h4>✨ Nandhakumar K ✨</h4>
            </div>
        </div>

        <div class="review-card">
            <div class="stars">★★★★★</div>
            <p>"The quality of the clothes, designs, and varieties are so trendy and good. The customer service is amazing and the staff service was great! Would love to come back for more..!"</p>
            <div class="reviewer">
                <h4>✨ Dheepthika ✨</h4>
            </div>
        </div>
    </div>
</section>
@endsection
