import profileImage from "@/assets/profile.jpg";
import { Heart, Sparkles, Palette } from "lucide-react";

const About = () => {
  return (
    <section id="about" className="py-24 relative overflow-hidden">
      {/* Decorative background shapes */}
      <div className="absolute top-0 left-0 w-64 h-64 bg-pastel-mint rounded-full blur-3xl opacity-20" />
      <div className="absolute bottom-0 right-0 w-80 h-80 bg-pastel-pink rounded-full blur-3xl opacity-20" />

      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-6xl mx-auto">
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div className="order-2 md:order-1 space-y-6 animate-fadeInUp">
              <div className="inline-block">
                <span className="text-primary font-semibold text-lg">About Me</span>
              </div>
              <h2 className="text-5xl font-bold leading-tight">
                Passionate About Creating{" "}
                <span className="bg-gradient-to-r from-primary to-pastel-pink bg-clip-text text-transparent">
                  Memorable
                </span>{" "}
                Designs
              </h2>
              <p className="text-lg text-muted-foreground leading-relaxed">
                With over 5 years of experience in digital design, I specialize in creating beautiful,
                user-centered experiences that make a lasting impact. My work bridges the gap between
                aesthetics and functionality.
              </p>
              <p className="text-lg text-muted-foreground leading-relaxed">
                I believe great design should feel effortless, tell a story, and most importantly,
                solve real problems. Let's create something amazing together!
              </p>

              <div className="grid grid-cols-3 gap-6 pt-6">
                <div className="text-center p-4 bg-pastel-lavender/20 rounded-2xl hover-lift">
                  <Heart className="w-8 h-8 mx-auto mb-2 text-primary" />
                  <p className="font-semibold">5+ Years</p>
                  <p className="text-sm text-muted-foreground">Experience</p>
                </div>
                <div className="text-center p-4 bg-pastel-peach/20 rounded-2xl hover-lift">
                  <Sparkles className="w-8 h-8 mx-auto mb-2 text-primary" />
                  <p className="font-semibold">100+</p>
                  <p className="text-sm text-muted-foreground">Projects</p>
                </div>
                <div className="text-center p-4 bg-pastel-mint/20 rounded-2xl hover-lift">
                  <Palette className="w-8 h-8 mx-auto mb-2 text-primary" />
                  <p className="font-semibold">50+</p>
                  <p className="text-sm text-muted-foreground">Happy Clients</p>
                </div>
              </div>
            </div>

            <div className="order-1 md:order-2 animate-scaleIn">
              <div className="relative">
                <div className="absolute inset-0 bg-gradient-to-br from-pastel-lavender to-pastel-peach rounded-full blur-2xl opacity-30 animate-float" />
                <img
                  src={profileImage}
                  alt="Profile"
                  className="relative rounded-full w-full max-w-md mx-auto shadow-hover border-8 border-white"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
