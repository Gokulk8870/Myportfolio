import { useState } from "react";
import {
  Mail,
  MessageSquare,
  Send,
  Github,
  Linkedin,
} from "lucide-react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Card } from "@/components/ui/card";
import { useToast } from "@/hooks/use-toast";

const Contact = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });
  const [isSubmitting, setIsSubmitting] = useState(false);

  // Google Apps Script Web App URL - Replace with your deployed URL
  const APPS_SCRIPT_URL = "https://script.google.com/macros/d/AKfycbx3gurOwjE9ZndWTL-fmgQgRGhxw3-EJ8TGWjoDTjk1bxEExfuyejTDYpYa6bl1M7Pp/usercontent";

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();

    // Input validation
    if (!formData.name.trim() || !formData.email.trim() || !formData.message.trim()) {
      toast({
        title: "Validation Error",
        description: "Please fill in all fields.",
      });
      return;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.email)) {
      toast({
        title: "Invalid Email",
        description: "Please enter a valid email address.",
      });
      return;
    }

    setIsSubmitting(true);

    try {
      // Send data directly to Google Sheets via Apps Script
      const payload = {
        name: formData.name.trim(),
        email: formData.email.trim(),
        message: formData.message.trim(),
      };

      const response = await fetch(APPS_SCRIPT_URL, {
        method: "POST",
        mode: "no-cors", // Required for Netlify static hosting
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(payload),
      });

      // With no-cors mode, we can't check response.ok directly
      // So we show success message and assume it worked if fetch didn't throw
      toast({
        title: "Message Sent! 🎉",
        description: "Thank you for reaching out. I'll get back to you soon!",
      });

      // Clear form on success
      setFormData({ name: "", email: "", message: "" });

    } catch (error) {
      console.error("Error sending message:", error);
      toast({
        title: "Error",
        description: "Failed to send message. Please check your connection and try again.",
      });
    } finally {
      setIsSubmitting(false);
    }
  };

  const socialLinks = [
    { icon: Github, url: "https://github.com/Gokulk8870", label: "GitHub" },
    { icon: Linkedin, url: "https://www.linkedin.com/in/gokul-k-97694a2507", label: "LinkedIn" },
  ];

  return (
    <section id="contact" className="py-24 relative overflow-hidden">
      {/* Decorative background */}
      <div className="absolute top-0 left-1/4 w-96 h-96 bg-pastel-lavender rounded-full blur-3xl opacity-20" />
      <div className="absolute bottom-0 right-1/4 w-96 h-96 bg-pastel-peach rounded-full blur-3xl opacity-20" />

      <div className="container mx-auto px-6 relative z-10">
        <div className="text-center mb-16 animate-fadeInUp">
          <span className="text-primary font-semibold text-lg">
            Get In Touch
          </span>
          <h2 className="text-5xl font-bold mt-4 mb-6">
            Let's Create Something{" "}
            <span className="bg-gradient-to-r from-primary to-pastel-pink bg-clip-text text-transparent">
              Amazing
            </span>
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            Have a project in mind? Let's talk and make it happen together!
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
          <Card className="p-8 md:p-12 rounded-3xl border-0 shadow-soft animate-scaleIn">
            <form onSubmit={handleSubmit} className="space-y-6">
              <div>
                <label className="block text-sm font-semibold mb-2">
                  Your Name
                </label>
                <Input
                  type="text"
                  placeholder="John Doe"
                  name="name"
                  value={formData.name}
                  onChange={(e) =>
                    setFormData({ ...formData, name: e.target.value })
                  }
                  className="rounded-xl border-2 focus:border-primary"
                  required
                />
              </div>

              <div>
                <label className="block text-sm font-semibold mb-2">
                  Email Address
                </label>
                <Input
                  type="email"
                  placeholder="john@example.com"
                  name="email"
                  value={formData.email}
                  onChange={(e) =>
                    setFormData({ ...formData, email: e.target.value })
                  }
                  className="rounded-xl border-2 focus:border-primary"
                  required
                />
              </div>

              <div>
                <label className="block text-sm font-semibold mb-2">
                  Your Message
                </label>
                <Textarea
                  placeholder="Tell me about your project..."
                  name="message"
                  value={formData.message}
                  onChange={(e) =>
                    setFormData({ ...formData, message: e.target.value })
                  }
                  className="rounded-xl border-2 focus:border-primary min-h-[150px]"
                  required
                />
              </div>

              <Button
                type="submit"
                disabled={isSubmitting}
                className="w-full bg-primary hover:bg-primary/90 text-primary-foreground rounded-full py-6 text-lg shadow-soft hover-lift"
              >
                <Send className="w-5 h-5 mr-2" />
                {isSubmitting ? "Sending..." : "Send Message"}
              </Button>
            </form>
          </Card>

          <div className="space-y-8 animate-fadeInUp">
            <Card className="p-8 rounded-3xl border-0 shadow-soft bg-gradient-accent/10">
              <Mail className="w-12 h-12 text-primary mb-4" />
              <h3 className="text-xl font-bold mb-2">Email Me</h3>
              <p className="text-muted-foreground mb-4">
                Prefer email? Drop me a line anytime!
              </p>
              <a
                href="mailto:gokulgokul4457@gmail.com"
                className="text-primary font-semibold hover:underline"
              >
                gokulgokul4457@gmail.com
              </a>
              <p className="text-muted-foreground mt-2">
                <a href="tel:+916380531946" className="hover:text-primary">
                  +91 6380531946
                </a>
              </p>
            </Card>

            <Card className="p-8 rounded-3xl border-0 shadow-soft bg-gradient-hero/10">
              <MessageSquare className="w-12 h-12 text-primary mb-4" />
              <h3 className="text-xl font-bold mb-2">Let's Chat</h3>
              <p className="text-muted-foreground mb-4">
                Available for freelance projects and collaborations
              </p>
              <div className="flex gap-4">
                {socialLinks.map((social) => (
                  <a
                    key={social.label}
                    href={social.url}
                    className="w-12 h-12 bg-white rounded-full flex items-center justify-center hover-lift transition-smooth shadow-soft"
                    aria-label={social.label}
                  >
                    <social.icon className="w-5 h-5 text-primary" />
                  </a>
                ))}
              </div>
            </Card>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;
