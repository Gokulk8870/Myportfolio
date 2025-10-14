import { useState } from "react";
import { X, ExternalLink } from "lucide-react";
import { Card } from "@/components/ui/card";
import { Dialog, DialogContent, DialogTitle } from "@/components/ui/dialog";
import { Button } from "@/components/ui/button";
import project1 from "@/assets/project1.jpg";
import project2 from "@/assets/project2.jpg";
import project3 from "@/assets/project3.jpg";
import project4 from "@/assets/project4.jpg";

const projects = [
  {
    id: 1,
    title: "Minimal Website Design",
    category: "Web Design",
    description: "A clean, modern website design for a creative agency with focus on user experience and visual hierarchy.",
    image: project1,
    tags: ["UI/UX", "Web Design", "Branding"],
    color: "bg-pastel-lavender",
  },
  {
    id: 2,
    title: "Mobile App Interface",
    category: "App Design",
    description: "Beautiful mobile app design with intuitive navigation and smooth interactions for a wellness application.",
    image: project2,
    tags: ["Mobile", "UI/UX", "Prototyping"],
    color: "bg-pastel-pink",
  },
  {
    id: 3,
    title: "Brand Identity Design",
    category: "Branding",
    description: "Complete brand identity package including logo, color palette, and marketing materials for a boutique brand.",
    image: project3,
    tags: ["Branding", "Identity", "Print"],
    color: "bg-pastel-peach",
  },
  {
    id: 4,
    title: "Creative Illustrations",
    category: "Illustration",
    description: "Whimsical illustration series created for a children's book, featuring soft pastels and playful characters.",
    image: project4,
    tags: ["Illustration", "Digital Art", "Creative"],
    color: "bg-pastel-mint",
  },
];

const Portfolio = () => {
  const [selectedProject, setSelectedProject] = useState<typeof projects[0] | null>(null);

  return (
    <section id="portfolio" className="py-24 bg-muted/30">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16 animate-fadeInUp">
          <span className="text-primary font-semibold text-lg">Portfolio</span>
          <h2 className="text-5xl font-bold mt-4 mb-6">
            My Recent{" "}
            <span className="bg-gradient-to-r from-primary to-pastel-pink bg-clip-text text-transparent">
              Work
            </span>
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            Explore a selection of projects where creativity meets functionality
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
          {projects.map((project, index) => (
            <Card
              key={project.id}
              className="group cursor-pointer overflow-hidden rounded-3xl border-0 shadow-soft hover-lift transition-smooth"
              onClick={() => setSelectedProject(project)}
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div className="relative overflow-hidden">
                <img
                  src={project.image}
                  alt={project.title}
                  className="w-full h-80 object-cover transition-smooth group-hover:scale-110"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-foreground/80 to-transparent opacity-0 group-hover:opacity-100 transition-smooth" />
                <div className="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition-smooth">
                  <p className="text-white text-sm mb-2">{project.category}</p>
                  <h3 className="text-white text-2xl font-bold">{project.title}</h3>
                </div>
              </div>
              <div className={`p-6 ${project.color}/20`}>
                <div className="flex flex-wrap gap-2">
                  {project.tags.map((tag) => (
                    <span
                      key={tag}
                      className="px-3 py-1 bg-white/50 rounded-full text-sm font-medium"
                    >
                      {tag}
                    </span>
                  ))}
                </div>
              </div>
            </Card>
          ))}
        </div>

        {/* Project Detail Dialog */}
        <Dialog open={!!selectedProject} onOpenChange={() => setSelectedProject(null)}>
          <DialogContent className="max-w-3xl max-h-[90vh] overflow-y-auto rounded-3xl">
            {selectedProject && (
              <>
                <DialogTitle className="text-3xl font-bold mb-4">{selectedProject.title}</DialogTitle>
                <img
                  src={selectedProject.image}
                  alt={selectedProject.title}
                  className="w-full h-96 object-cover rounded-2xl mb-6"
                />
                <div className="space-y-4">
                  <div>
                    <span className="text-sm font-semibold text-primary uppercase">
                      {selectedProject.category}
                    </span>
                    <p className="text-lg text-muted-foreground mt-2">
                      {selectedProject.description}
                    </p>
                  </div>
                  <div>
                    <h4 className="font-semibold mb-2">Technologies & Skills</h4>
                    <div className="flex flex-wrap gap-2">
                      {selectedProject.tags.map((tag) => (
                        <span
                          key={tag}
                          className={`px-4 py-2 ${selectedProject.color}/30 rounded-full text-sm font-medium`}
                        >
                          {tag}
                        </span>
                      ))}
                    </div>
                  </div>
                  <Button
                    className="w-full bg-primary hover:bg-primary/90 text-primary-foreground rounded-full mt-6"
                    size="lg"
                  >
                    <ExternalLink className="w-4 h-4 mr-2" />
                    View Project Details
                  </Button>
                </div>
              </>
            )}
          </DialogContent>
        </Dialog>
      </div>
    </section>
  );
};

export default Portfolio;
