import { Code, Database, Globe, Server, GitBranch, Cpu } from "lucide-react";
import { Card } from "@/components/ui/card";

const skills = [
  {
    icon: Code,
    title: "Programming",
    description:
      "Proficient in C, Java, Python for software development",
    color: "bg-pastel-lavender",
  },
  {
    icon: Globe,
    title: "Web Development",
    description:
      "HTML, CSS, PHP (Core & Laravel), MVC architecture",
    color: "bg-pastel-pink",
  },
  {
    icon: Database,
    title: "Database Management",
    description:
      "MySQL database design, queries, and optimization",
    color: "bg-pastel-peach",
  },
  {
    icon: Server,
    title: "Backend Development",
    description:
      "Laravel framework with authentication, routing, and migrations",
    color: "bg-pastel-mint",
  },
  {
    icon: GitBranch,
    title: "Version Control",
    description:
      "GitHub for collaboration, version control, and deployment",
    color: "bg-pastel-blue",
  },
  {
    icon: Cpu,
    title: "Core Competencies",
    description:
      "Debugging, documentation, teamwork, and requirement analysis",
    color: "bg-pastel-lavender",
  },
];

const tools = [
  "C",
  "Java",
  "Python",
  "HTML",
  "CSS",
  "PHP",
  "Laravel",
  "MySQL",
  "VS Code",
  "Eclipse",
  "Turbo C",
  "XAMPP",
  "GitHub",
];

const Skills = () => {
  return (
    <section id="skills" className="py-24">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16 animate-fadeInUp">
          <span className="text-primary font-semibold text-lg">
            Skills & Expertise
          </span>
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
              className={`p-8 rounded-3xl border-0 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer ${skill.color}/10`}
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div
                className={`w-16 h-16 ${skill.color}/30 rounded-2xl flex items-center justify-center mb-6 shadow-md`}
              >
                <skill.icon className="w-8 h-8 text-primary" />
              </div>
              <h3 className="text-xl font-bold mb-3">{skill.title}</h3>
              <p className="text-muted-foreground">{skill.description}</p>
            </Card>
          ))}
        </div>

        <div className="max-w-4xl mx-auto text-center">
          <h3 className="text-2xl font-bold mb-8">
            Programming Languages & Tools
          </h3>
          <div className="flex flex-wrap justify-center gap-4">
            {tools.map((tool, index) => (
              <div
                key={tool}
                className="px-6 py-3 glass rounded-full font-medium hover-lift transition-all duration-300 shadow-md hover:shadow-lg"
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
