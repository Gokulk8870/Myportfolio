 @extends('layouts.master')

@section('title', 'Contact Us - Jhan\'s Collections')

@section('content')
<section style="height: 60vh; min-height: 400px; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('{{ asset('assets/Service Pages/v7.jpg') }}') no-repeat center center/cover; display: flex; align-items: center; justify-content: center; color: white; text-align: center; position: relative; margin-top: 90px; animation: fadeIn 1s ease;">
    <div style="position: relative; z-index: 2; padding: 0 5%; max-width: 800px; animation: slideDown 1s ease;">
        <h1 style="font-size: clamp(2rem, 8vw, 3.5rem); margin-bottom: 20px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6); font-family: 'Dancing Script', cursive; font-weight: 700;">Contact Us</h1>
        <p style="font-size: clamp(1rem, 4vw, 1.2rem); opacity: 0.95; line-height: 1.4;">We're here to help you with all your fashion needs ✨</p>
    </div>
</section>

<section style="display: flex; flex-wrap: wrap; align-items: flex-start; justify-content: space-between; padding: clamp(50px, 10vw, 100px) clamp(5%, 10vw, 10%); gap: clamp(20px, 5vw, 40px); background: #fff; border-radius: 40px 40px 0 0; margin-top: -40px; box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05); animation: slideUp 1s ease;">
    <div style="flex: 1; max-width: 480px; animation: slideLeft 1s ease;">

        <h2 style="font-size: 2.6rem; margin-bottom: 25px; color: #111; position: relative; font-family: 'Dancing Script', cursive;">
            Get in Touch
            <span style="position: absolute; width: 60px; height: 4px; background: #4bbc43; bottom: -8px; left: 0; border-radius: 2px; display: block; animation: expandWidth 1s ease 0.5s both;"></span>
        </h2>

        <!-- UPDATED PARAGRAPH WITH EXTRA SPACE -->
        <p style="font-size: 1.1rem; line-height: 1.8; color: #555;
                  margin-bottom: 35px; transition: transform 0.3s ease;
                  font-family: 'Times New Roman', serif;"
           onmouseover="this.style.transform='translateX(5px)'"
           onmouseout="this.style.transform='translateX(0)'">
            Have questions about our collections or need help with your order?
            We'd love to hear from you. Our team will get back to you soon!
        </p>

        <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 18px; transition: transform 0.3s ease; font-family: 'Times New Roman', serif;"
           onmouseover="this.style.transform='translateX(5px)'"
           onmouseout="this.style.transform='translateX(0)'">
           <strong>Email:</strong> support@jhanscollections.com
        </p>

        <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 18px; transition: transform 0.3s ease; font-family: 'Times New Roman', serif;"
           onmouseover="this.style.transform='translateX(5px)'"
           onmouseout="this.style.transform='translateX(0)'">
           <strong>Phone:</strong> +91 98765 43210
        </p>

        <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 18px; transition: transform 0.3s ease; font-family: 'Times New Roman', serif;"
           onmouseover="this.style.transform='translateX(5px)'"
           onmouseout="this.style.transform='translateX(0)'">
           <strong>Address:</strong> 15, Thudiyalur Rd, Vasantham Nagar, Saravanampatti, Coimbatore, Tamil Nadu 641035, India
        </p>

    </div>

    <div style="flex: 1; max-width: 500px; background: #fff; border-radius: 20px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); height: 400px; overflow: hidden; animation: slideRight 1s ease; transition: transform 0.4s ease, box-shadow 0.4s ease;"
         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(0, 0, 0, 0.15)'"
         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0, 0, 0, 0.1)'">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.4324631159157!2d76.98971057480955!3d11.081111389086836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f7f931b8042d%3A0xd3e5868ba41d4013!2sJhan&#39;s%20Collections!5e0!3m2!1sen!2sus!4v1762769158003!5m2!1sen!2sus"
                style="width: 100%; height: 100%; border: 0;"
                allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<style>
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
@keyframes expandWidth {
    from { width: 0; }
    to { width: 60px; }
}

/* Mobile Responsive */
@media (max-width: 768px) {
    section:first-of-type {
        height: 50vh !important;
        min-height: 300px !important;
        margin-top: 60px !important;
    }
    section:last-of-type {
        flex-direction: column !important;
        padding: 50px 5% !important;
        gap: 30px !important;
    }
    div[style*="max-width: 480px"] {
        max-width: 100% !important;
    }
    div[style*="max-width: 500px"] {
        max-width: 100% !important;
        height: 300px !important;
    }
}

@media (max-width: 480px) {
    section:first-of-type {
        height: 40vh !important;
        min-height: 250px !important;
        margin-top: 55px !important;
    }
    section:last-of-type {
        padding: 30px 3% !important;
        border-radius: 20px 20px 0 0 !important;
    }
}
</style>
@endsection
