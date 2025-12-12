@extends('layouts.master')

@section('title', 'Terms of Service - Jhan\'s Collections')

@section('styles')
<style>
    * {
        font-family: "Poppins", sans-serif;
    }
    body {
        padding-top: 90px;
        background: #f9f9f9;
        color: #333;
        line-height: 1.6;
    }
    .hero {
        height: 40vh;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{asset('assets/Service Pages/v33.jpg')}}') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        margin-bottom: 40px;
    }
    .hero h1 {
        font-size: 3rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        font-family: 'Dancing Script', cursive;
        color: #e91e63;
    }
    .terms-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }
    .terms-section {
        margin-bottom: 30px;
    }
    .terms-section h2 {
        color: #e91e63;
        font-size: 1.5rem;
        margin-bottom: 15px;
        border-bottom: 2px solid #e91e63;
        padding-bottom: 5px;
    }
    .terms-section p {
        margin-bottom: 15px;
        text-align: justify;
    }
    .terms-section ul {
        margin-left: 20px;
        margin-bottom: 15px;
    }
    .terms-section li {
        margin-bottom: 8px;
    }
    .last-updated {
        text-align: center;
        color: #666;
        font-style: italic;
        margin-bottom: 30px;
    }
    
    @media (max-width: 768px) {
        body {
            padding-top: 70px;
        }
        .hero {
            height: 30vh;
        }
        .hero h1 {
            font-size: 2rem;
        }
        .terms-container {
            margin: 20px;
            padding: 20px;
        }
    }
</style>
@endsection

@section('content')
<section class="hero">
    <h1>Terms of Service</h1>
</section>

<div class="terms-container">
    <div class="last-updated">
        <p>Last updated: January 1, 2025</p>
    </div>

    <div class="terms-section">
        <h2>1. Acceptance of Terms</h2>
        <p>By accessing and using Jhan's Collections website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
    </div>

    <div class="terms-section">
        <h2>2. Products and Services</h2>
        <p>Jhan's Collections offers high-quality fashion clothing for men, women, and children. We strive to provide accurate product descriptions and images, but we cannot guarantee that colors will appear exactly as shown due to monitor variations.</p>
        <ul>
            <li>All products are subject to availability</li>
            <li>Prices are subject to change without notice</li>
            <li>We reserve the right to limit quantities</li>
        </ul>
    </div>

    <div class="terms-section">
        <h2>3. Orders and Payment</h2>
        <p>When you place an order with us, you agree to provide accurate and complete information. We accept various payment methods and all transactions are processed securely.</p>
        <ul>
            <li>Orders are subject to acceptance and availability</li>
            <li>Payment must be received before order processing</li>
            <li>We reserve the right to cancel orders for any reason</li>
        </ul>
    </div>

    <div class="terms-section">
        <h2>4. Shipping and Delivery</h2>
        <p>We aim to process and ship orders within 2-3 business days. Delivery times may vary based on location and shipping method selected.</p>
        <ul>
            <li>Shipping costs are calculated at checkout</li>
            <li>Risk of loss passes to customer upon delivery</li>
            <li>Delivery delays due to circumstances beyond our control are not our responsibility</li>
        </ul>
    </div>

    <div class="terms-section">
        <h2>5. Returns and Exchanges</h2>
        <p>We want you to be completely satisfied with your purchase. Items may be returned within 30 days of delivery in original condition with tags attached.</p>
        <ul>
            <li>Items must be unworn and in original packaging</li>
            <li>Customer is responsible for return shipping costs</li>
            <li>Refunds will be processed within 5-7 business days</li>
        </ul>
    </div>

    <div class="terms-section">
        <h2>6. Privacy Policy</h2>
        <p>Your privacy is important to us. We collect and use personal information only as necessary to provide our services and improve your shopping experience. We do not sell or share your personal information with third parties without your consent.</p>
    </div>

    <div class="terms-section">
        <h2>7. Intellectual Property</h2>
        <p>All content on this website, including text, graphics, logos, images, and software, is the property of Jhan's Collections and is protected by copyright and trademark laws.</p>
    </div>

    <div class="terms-section">
        <h2>8. Limitation of Liability</h2>
        <p>Jhan's Collections shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our products or services.</p>
    </div>

    <div class="terms-section">
        <h2>9. Modifications</h2>
        <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on our website. Your continued use of our services constitutes acceptance of any modifications.</p>
    </div>

    <div class="terms-section">
        <h2>10. Contact Information</h2>
        <p>If you have any questions about these Terms of Service, please contact us through our contact page or reach out to our customer service team.</p>
    </div>
</div>
@endsection