import { useState } from "react";
import { X, ExternalLink, Github } from "lucide-react";
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
    title: "Billing Management System",
    category: "Internship Project - KG Gensys Lab",
    description:
      "Enterprise billing software built with Laravel and MySQL. Features authentication, routing, form validation, authorization, and migrations. Includes invoicing, reporting, customer records, and transaction modules. Conducted requirement gathering, debugging, testing, deployment, and user training.",
    image: project1,
    tags: ["Laravel", "MySQL", "PHP", "GitHub", "MVC"],
    color: "bg-pastel-lavender",
    github: "https://github.com/Gokulk8870",
    demo: null,
  },
  {
    id: 2,
    title: "Personal Portfolio Website",
    category: "Frontend Project",
    description:
      "A responsive portfolio website built with React and TypeScript, featuring modern UI design with Tailwind CSS and smooth animations. Showcases projects, skills, and professional experience.",
    image: project2,
    tags: ["React", "TypeScript", "Tailwind CSS", "Vite"],
    color: "bg-pastel-pink",
    github: "https://github.com/Gokulk8870",
    demo: null,
  },
];}

const Portfolio = () => {
  const [selectedProject, setSelectedProject] = useState<
    (typeof projects)[0] | null
  >(null);

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

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
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
                  <h3 className="text-white text-2xl font-bold">
                    {project.title}
                  </h3>
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
        <Dialog
          open={!!selectedProject}
          onOpenChange={() => setSelectedProject(null)}
        >
          <DialogContent className="max-w-3xl max-h-[90vh] overflow-y-auto rounded-3xl">
            {selectedProject && (
              <>
                <DialogTitle className="text-3xl font-bold mb-4">
                  {selectedProject.title}
                </DialogTitle>
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
                    <h4 className="font-semibold mb-2">
                      Technologies & Skills
                    </h4>
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
                  <div className="flex gap-3 mt-6">
                    {selectedProject.github && (
                      <Button
                        variant="outline"
                        className="flex-1 rounded-full"
                        size="lg"
                        onClick={() =>
                          window.open(selectedProject.github, "_blank")
                        }
                      >
                        <Github className="w-4 h-4 mr-2" />
                        View Code
                      </Button>
                    )}
                    {selectedProject.demo && (
                      <Button
                        className="flex-1 bg-primary hover:bg-primary/90 text-primary-foreground rounded-full"
                        size="lg"
                        onClick={() =>
                          window.open(selectedProject.demo, "_blank")
                        }
                      >
                        <ExternalLink className="w-4 h-4 mr-2" />
                        Live Demo
                      </Button>
                    )}
                    {!selectedProject.demo && (
                      <Button
                        className="flex-1 bg-primary hover:bg-primary/90 text-primary-foreground rounded-full"
                        size="lg"
                      >
                        <ExternalLink className="w-4 h-4 mr-2" />
                        View Project
                      </Button>
                    )}
                  </div>
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
