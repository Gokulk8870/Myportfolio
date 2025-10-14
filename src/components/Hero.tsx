import { ArrowDown } from "lucide-react";
import { Button } from "@/components/ui/button";
import heroImage from "@/assets/hero-bg.jpg";

const Hero = () => {
  const scrollToContact = () => {
    const element = document.getElementById("contact");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <section
      id="hero"
      className="min-h-screen flex items-center justify-center relative overflow-hidden pt-20"
      style={{
        backgroundImage: `url(${heroImage})`,
        backgroundSize: "cover",
        backgroundPosition: "center",
      }}
    >
      {/* Overlay */}
      <div className="absolute inset-0 bg-background/80" />

      {/* Floating shapes */}
      <div className="absolute top-20 left-10 w-20 h-20 bg-pastel-lavender rounded-full blur-2xl animate-float" />
      <div className="absolute bottom-20 right-10 w-32 h-32 bg-pastel-peach rounded-full blur-2xl animate-float" style={{ animationDelay: "1s" }} />
      <div className="absolute top-1/2 right-1/4 w-24 h-24 bg-pastel-mint rounded-full blur-2xl animate-float" style={{ animationDelay: "2s" }} />

      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-4xl mx-auto text-center">
          <div className="animate-fadeInUp">
            <h1 className="text-6xl md:text-8xl font-bold mb-6 bg-gradient-to-r from-primary via-pastel-pink to-pastel-peach bg-clip-text text-transparent">
              Alex Morgan
            </h1>
            <p className="text-2xl md:text-3xl text-muted-foreground mb-8 font-light">
              Creative Designer Who Loves Crafting Beautiful Experiences
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
              <Button
                onClick={scrollToContact}
                size="lg"
                className="bg-primary hover:bg-primary/90 text-primary-foreground rounded-full px-8 text-lg shadow-soft hover-lift"
              >
                Get In Touch
              </Button>
              <Button
                onClick={() => {
                  const element = document.getElementById("portfolio");
                  if (element) element.scrollIntoView({ behavior: "smooth" });
                }}
                size="lg"
                variant="outline"
                className="rounded-full px-8 text-lg border-2 border-primary/30 hover:border-primary hover:bg-primary/10"
              >
                View My Work
              </Button>
            </div>
          </div>

          <div className="mt-16 animate-bounce">
            <ArrowDown className="w-8 h-8 mx-auto text-primary" />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
