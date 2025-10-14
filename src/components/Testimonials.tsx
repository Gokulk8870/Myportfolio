import { Card } from "@/components/ui/card";
import { Star, Quote } from "lucide-react";

const testimonials = [
  {
    name: "Sarah Johnson",
    role: "CEO, TechStart",
    content: "Working with Alex was an absolute pleasure! The designs exceeded our expectations and truly captured our brand essence. Highly recommend!",
    rating: 5,
  },
  {
    name: "Michael Chen",
    role: "Product Manager, InnovateCo",
    content: "Alex's attention to detail and creative vision transformed our app. The user feedback has been phenomenal. A true design master!",
    rating: 5,
  },
  {
    name: "Emily Rodriguez",
    role: "Founder, CreativeHub",
    content: "Professional, creative, and so easy to work with. Alex understood our vision and brought it to life beautifully. Can't wait to work together again!",
    rating: 5,
  },
];

const Testimonials = () => {
  return (
    <section id="testimonials" className="py-24 bg-muted/30">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16 animate-fadeInUp">
          <span className="text-primary font-semibold text-lg">Testimonials</span>
          <h2 className="text-5xl font-bold mt-4 mb-6">
            Love from{" "}
            <span className="bg-gradient-to-r from-primary to-pastel-pink bg-clip-text text-transparent">
              Clients
            </span>
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            Here's what amazing people have to say about working with me
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
          {testimonials.map((testimonial, index) => (
            <Card
              key={testimonial.name}
              className="p-8 rounded-3xl border-0 shadow-soft hover-lift transition-smooth relative bg-white"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <Quote className="w-12 h-12 text-primary/20 absolute top-6 right-6" />
              <div className="flex gap-1 mb-4">
                {[...Array(testimonial.rating)].map((_, i) => (
                  <Star key={i} className="w-5 h-5 fill-primary text-primary" />
                ))}
              </div>
              <p className="text-muted-foreground mb-6 text-lg leading-relaxed">
                "{testimonial.content}"
              </p>
              <div className="flex items-center gap-4">
                <div className="w-12 h-12 bg-gradient-to-br from-pastel-lavender to-pastel-pink rounded-full" />
                <div>
                  <h4 className="font-bold">{testimonial.name}</h4>
                  <p className="text-sm text-muted-foreground">{testimonial.role}</p>
                </div>
              </div>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
