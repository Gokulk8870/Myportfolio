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
                  Efficient
                </span>{" "}
                Software Solutions
              </h2>
              <p className="text-lg text-muted-foreground leading-relaxed">
                Dedicated aspiring software engineer with expertise in web
                development, database-driven applications, and problem-solving.
                Currently pursuing MCA at KGiSL Institute (CGPA: 8.2) with a
                B.Sc in Computer Science (CGPA: 7.8).
              </p>
              <p className="text-lg text-muted-foreground leading-relaxed">
                Completed a 3-month internship at KG Gensys Lab, developing
                enterprise billing software with Laravel and MySQL. Quick
                learner with strong analytical and teamwork skills.
              </p>

              <div className="grid grid-cols-3 gap-6 pt-6">
                <div className="text-center p-4 bg-pastel-lavender/20 rounded-2xl hover-lift">
                  <Heart className="w-8 h-8 mx-auto mb-2 text-primary" />
                  <p className="font-semibold">CGPA 8.2</p>
                  <p className="text-sm text-muted-foreground">MCA Student</p>
                </div>
                <div className="text-center p-4 bg-pastel-peach/20 rounded-2xl hover-lift">
                  <Sparkles className="w-8 h-8 mx-auto mb-2 text-primary" />
                  <p className="font-semibold">3 Months</p>
                  <p className="text-sm text-muted-foreground">Internship</p>
                </div>
                <div className="text-center p-4 bg-pastel-mint/20 rounded-2xl hover-lift">
                  <Palette className="w-8 h-8 mx-auto mb-2 text-primary" />
                  <p className="font-semibold">Laravel</p>
                  <p className="text-sm text-muted-foreground">MySQL Expert</p>
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
