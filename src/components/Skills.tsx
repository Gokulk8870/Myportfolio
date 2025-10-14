import { Palette, Layout, Smartphone, Code, Figma, Sparkles } from "lucide-react";
import { Card } from "@/components/ui/card";

const skills = [
  {
    icon: Palette,
    title: "UI/UX Design",
    description: "Creating intuitive and beautiful user interfaces that delight users",
    color: "bg-pastel-lavender",
  },
  {
    icon: Layout,
    title: "Web Design",
    description: "Responsive and modern website designs that convert visitors",
    color: "bg-pastel-pink",
  },
  {
    icon: Smartphone,
    title: "Mobile Design",
    description: "Native and cross-platform mobile app designs with great UX",
    color: "bg-pastel-peach",
  },
  {
    icon: Code,
    title: "Prototyping",
    description: "Interactive prototypes that bring ideas to life before development",
    color: "bg-pastel-mint",
  },
  {
    icon: Figma,
    title: "Design Systems",
    description: "Scalable design systems for consistent brand experiences",
    color: "bg-pastel-blue",
  },
  {
    icon: Sparkles,
    title: "Branding",
    description: "Complete brand identities from concept to execution",
    color: "bg-pastel-lavender",
  },
];

const tools = [
  "Figma",
  "Adobe XD",
  "Sketch",
  "Photoshop",
  "Illustrator",
  "After Effects",
  "Principle",
  "Framer",
];

const Skills = () => {
  return (
    <section id="skills" className="py-24">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16 animate-fadeInUp">
          <span className="text-primary font-semibold text-lg">Skills & Expertise</span>
          <h2 className="text-5xl font-bold mt-4 mb-6">
            What I{" "}
            <span className="bg-gradient-to-r from-primary to-pastel-pink bg-clip-text text-transparent">
              Bring to the Table
            </span>
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            A diverse skill set to handle every aspect of your design needs
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto mb-16">
          {skills.map((skill, index) => (
            <Card
              key={skill.title}
              className={`p-8 rounded-3xl border-0 shadow-soft hover-lift transition-smooth ${skill.color}/10`}
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div className={`w-16 h-16 ${skill.color}/30 rounded-2xl flex items-center justify-center mb-6`}>
                <skill.icon className="w-8 h-8 text-primary" />
              </div>
              <h3 className="text-xl font-bold mb-3">{skill.title}</h3>
              <p className="text-muted-foreground">{skill.description}</p>
            </Card>
          ))}
        </div>

        <div className="max-w-4xl mx-auto text-center">
          <h3 className="text-2xl font-bold mb-8">Tools & Technologies</h3>
          <div className="flex flex-wrap justify-center gap-4">
            {tools.map((tool, index) => (
              <div
                key={tool}
                className="px-6 py-3 glass rounded-full font-medium hover-lift transition-smooth"
                style={{ animationDelay: `${index * 0.05}s` }}
              >
                {tool}
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Skills;
