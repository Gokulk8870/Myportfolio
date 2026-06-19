import { ArrowDown, Download } from "lucide-react";
import { Button } from "@/components/ui/button";
import heroImage from "@/assets/hero-bg.jpg";

const Hero = () => {
    const scrollToContact = () => {
        const element = document.getElementById("contact");
        if (element) {
            element.scrollIntoView({ behavior: "smooth" });
        }
    };

    const downloadCV = () => {
        const link = document.createElement("a");
        link.href = "/PortFolio_Resume.pdf";
        link.download = "Gokul_K_Software_Developer.pdf";
        link.click();
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
            <div
                className="absolute bottom-20 right-10 w-32 h-32 bg-pastel-peach rounded-full blur-2xl animate-float"
                style={{ animationDelay: "1s" }}
            />
            <div
                className="absolute top-1/2 right-1/4 w-24 h-24 bg-pastel-mint rounded-full blur-2xl animate-float"
                style={{ animationDelay: "2s" }}
            />

            <div className="container mx-auto px-6 relative z-10">
                <div className="max-w-4xl mx-auto text-center">
                    <div className="animate-fadeInUp">
                        <h1 className="text-6xl md:text-8xl font-bold mb-6 bg-gradient-to-r from-primary via-pastel-pink to-pastel-peach bg-clip-text text-transparent">
                            Gokul K
                        </h1>
                        <p className="text-2xl md:text-3xl text-muted-foreground mb-8 font-light">
                            Aspiring Software Developer | Laravel Developer |
                            Full Stack Web Developer
                        </p>
                        <p className="text-lg text-muted-foreground mb-8">
                            Erode, Tamil Nadu
                        </p>
                        <p className="max-w-3xl mx-auto text-lg md:text-xl text-muted-foreground leading-relaxed mb-8">
                            Passionate Software Developer with hands-on
                            experience in Laravel, PHP, MySQL, JavaScript, and
                            REST API development. Skilled in building scalable
                            web applications, database-driven systems, and
                            modern software solutions.
                        </p>

                        <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <Button
                                onClick={downloadCV}
                                size="lg"
                                className="bg-primary hover:bg-primary/90 text-primary-foreground rounded-full px-8 text-lg shadow-soft hover-lift flex items-center gap-2"
                            >
                                <Download className="w-5 h-5" />
                                Download Resume
                            </Button>
                            <Button
                                onClick={() => {
                                    const element =
                                        document.getElementById("portfolio");
                                    if (element)
                                        element.scrollIntoView({
                                            behavior: "smooth",
                                        });
                                }}
                                size="lg"
                                variant="outline"
                                className="rounded-full px-8 text-lg border-2 border-primary/30 hover:border-primary hover:bg-primary/10"
                            >
                                View Projects
                            </Button>
                            <Button
                                onClick={scrollToContact}
                                size="lg"
                                variant="outline"
                                className="rounded-full px-8 text-lg border-2 border-primary/30 hover:border-primary hover:bg-primary/10"
                            >
                                Contact Me
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
