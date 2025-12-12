@extends('layouts.master')

@section('title', 'Privacy Policy - Jhan\'s Collections')

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
    .privacy-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }
    .privacy-section {
        margin-bottom: 30px;
    }
    .privacy-section h2 {
        color: #e91e63;
        font-size: 1.5rem;
        margin-bottom: 15px;
        border-bottom: 2px solid #e91e63;
        padding-bottom: 5px;
    }
    .privacy-section p {
        margin-bottom: 15px;
        text-align: justify;
    }
    .privacy-section ul {
        margin-left: 20px;
        margin-bottom: 15px;
    }
    .privacy-section li {
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
        .privacy-container {
            margin: 20px;
            padding: 20px;
        }
    }
</style>
@endsection

@section('content')
<section class="hero">
    <h1>Privacy Policy</h1>
</section>

<div class="privacy-container">
    <div class="last-updated">
        <p>Last updated: January 1, 2025</p>
    </div>

    <div class="privacy-section">
        <h2>1. Information We Collect</h2>
        <p>At Jhan's Collections, we collect information to provide better services to our customers. We collect information in the following ways:</p>
        <ul>
            <li><strong>Personal Information:</strong> Name, email address, phone number, shipping and billing addresses</li>
            <li><strong>Payment Information:</strong> Credit card details, billing information (processed securely through third-party payment processors)</li>
            <li><strong>Account Information:</strong> Username, password, purchase history, preferences</li>
            <li><strong>Technical Information:</strong> IP address, browser type, device information, cookies</li>
        </ul>
    </div>

    <div class="privacy-section">
        <h2>2. How We Use Your Information</h2>
        <p>We use the information we collect for the following purposes:</p>
        <ul>
            <li>Process and fulfill your orders</li>
            <li>Communicate with you about your orders and account</li>
            <li>Provide customer support and respond to inquiries</li>
            <li>Send promotional emails and marketing communications (with your consent)</li>
            <li>Improve our website and services</li>
            <li>Prevent fraud and ensure security</li>
            <li>Comply with legal obligations</li>
        </ul>
    </div>

    <div class="privacy-section">
        <h2>3. Information Sharing</h2>
        <p>We do not sell, trade, or rent your personal information to third parties. We may share your information in the following circumstances:</p>
        <ul>
            <li><strong>Service Providers:</strong> With trusted third-party service providers who help us operate our business</li>
            <li><strong>Legal Requirements:</strong> When required by law or to protect our rights and safety</li>
            <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets</li>
            <li><strong>With Your Consent:</strong> When you explicitly agree to share your information</li>
        </ul>
    </div>

    <div class="privacy-section">
        <h2>4. Data Security</h2>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:</p>
        <ul>
            <li>SSL encryption for data transmission</li>
            <li>Secure servers and databases</li>
            <li>Regular security audits and updates</li>
            <li>Limited access to personal information by authorized personnel only</li>
        </ul>
    </div>

    <div class="privacy-section">
        <h2>5. Cookies and Tracking</h2>
        <p>We use cookies and similar tracking technologies to enhance your browsing experience. Cookies help us:</p>
        <ul>
            <li>Remember your preferences and settings</li>
            <li>Analyze website traffic and usage patterns</li>
            <li>Provide personalized content and recommendations</li>
            <li>Enable social media features</li>
        </ul>
        <p>You can control cookie settings through your browser preferences.</p>
    </div>

    <div class="privacy-section">
        <h2>6. Your Rights</h2>
        <p>You have the following rights regarding your personal information:</p>
        <ul>
            <li><strong>Access:</strong> Request a copy of the personal information we hold about you</li>
            <li><strong>Correction:</strong> Request correction of inaccurate or incomplete information</li>
            <li><strong>Deletion:</strong> Request deletion of your personal information (subject to legal requirements)</li>
            <li><strong>Opt-out:</strong> Unsubscribe from marketing communications at any time</li>
            <li><strong>Data Portability:</strong> Request transfer of your data to another service provider</li>
        </ul>
    </div>

    <div class="privacy-section">
        <h2>7. Third-Party Links</h2>
        <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>
    </div>

    <div class="privacy-section">
        <h2>8. Children's Privacy</h2>
        <p>Our services are not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13. If we become aware that we have collected personal information from a child under 13, we will take steps to delete such information.</p>
    </div>

    <div class="privacy-section">
        <h2>9. International Data Transfers</h2>
        <p>Your information may be transferred to and processed in countries other than your own. We ensure that such transfers comply with applicable data protection laws and that your information receives adequate protection.</p>
    </div>

    <div class="privacy-section">
        <h2>10. Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify you of any material changes by posting the new policy on our website and updating the "Last updated" date. Your continued use of our services after such changes constitutes acceptance of the updated policy.</p>
    </div>

    <div class="privacy-section">
        <h2>11. Contact Us</h2>
        <p>If you have any questions about this Privacy Policy or our data practices, please contact us through our contact page or reach out to our customer service team. We are committed to addressing your concerns and protecting your privacy.</p>
    </div>
</div>
@endsection