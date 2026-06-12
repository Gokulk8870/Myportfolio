import profileImage from "@/assets/myimage.png";
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
                                <span className="text-primary font-semibold text-lg">
                                    About Me
                                </span>
                            </div>
                            <h2 className="text-5xl font-bold leading-tight">
                                Building{" "}
                                <span className="bg-gradient-to-r from-primary to-pastel-pink bg-clip-text text-transparent">
                                    Modern
                                </span>{" "}
                                Software Solutions
                            </h2>
                            <p className="text-lg text-muted-foreground leading-relaxed">
                                I am an aspiring Software Developer with
                                practical experience in web application
                                development using PHP, Laravel, MySQL,
                                JavaScript, HTML, CSS, and Bootstrap.
                            </p>
                            <p className="text-lg text-muted-foreground leading-relaxed">
                                Currently pursuing a Master of Computer
                                Applications (MCA), I have developed strong
                                foundations in Object-Oriented Programming, Data
                                Structures, Algorithms, Database Management
                                Systems, and Software Engineering.
                            </p>
                            <p className="text-lg text-muted-foreground leading-relaxed">
                                During my internship at KG Genius Labs, I worked
                                on enterprise-level billing and inventory
                                management systems where I developed CRUD
                                modules, integrated REST APIs, optimized SQL
                                queries, and implemented secure authentication
                                systems.
                            </p>
                            <p className="text-lg text-muted-foreground leading-relaxed">
                                I enjoy solving real-world problems through
                                software development and continuously learning
                                new technologies to improve my technical
                                expertise.
                            </p>

                            <div className="grid grid-cols-3 gap-6 pt-6">
                                <div className="text-center p-4 bg-pastel-lavender/20 rounded-2xl hover-lift">
                                    <Heart className="w-8 h-8 mx-auto mb-2 text-primary" />
                                    <p className="font-semibold">MCA (Pursuing)</p>
                                    <p className="text-sm text-muted-foreground">
                                        B.Sc CS — CGPA 7.8
                                    </p>
                                </div>
                                <div className="text-center p-4 bg-pastel-peach/20 rounded-2xl hover-lift">
                                    <Sparkles className="w-8 h-8 mx-auto mb-2 text-primary" />
                                    <p className="font-semibold">SW Dev Intern</p>
                                    <p className="text-sm text-muted-foreground">
                                        KG Genius Labs
                                    </p>
                                </div>
                                <div className="text-center p-4 bg-pastel-mint/20 rounded-2xl hover-lift">
                                    <Palette className="w-8 h-8 mx-auto mb-2 text-primary" />
                                    <p className="font-semibold">3+ Projects</p>
                                    <p className="text-sm text-muted-foreground">
                                        Full Stack Dev
                                    </p>
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
