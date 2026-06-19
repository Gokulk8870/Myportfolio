import React, { useEffect, useRef, useState } from "react";
import { ExternalLink, Github } from "lucide-react";
import { Dialog, DialogContent, DialogTitle } from "@/components/ui/dialog";
import { Button } from "@/components/ui/button";
import project1 from "@/assets/project1.jpg";
import project2 from "@/assets/project2.jpg";
import project3 from "@/assets/project3.jpg";
import project4 from "@/assets/project4.jpg";

/* ── Tag colour map ── */
const TAG_COLORS: Record<
    string,
    { bg: string; text: string; darkBg: string; darkText: string }
> = {
    Laravel: {
        bg: "#FEE2E2",
        text: "#B91C1C",
        darkBg: "#3B1212",
        darkText: "#FCA5A5",
    },
    PHP: {
        bg: "#EDE9FE",
        text: "#6D28D9",
        darkBg: "#2D1F4E",
        darkText: "#C4B5FD",
    },
    MySQL: {
        bg: "#DBEAFE",
        text: "#1D4ED8",
        darkBg: "#172554",
        darkText: "#93C5FD",
    },
    JavaScript: {
        bg: "#FEF9C3",
        text: "#92400E",
        darkBg: "#3B2900",
        darkText: "#FDE68A",
    },
    jQuery: {
        bg: "#E0F2FE",
        text: "#0369A1",
        darkBg: "#0C1F33",
        darkText: "#7DD3FC",
    },
    Bootstrap: {
        bg: "#EDE9FE",
        text: "#7C3AED",
        darkBg: "#2D1B69",
        darkText: "#DDD6FE",
    },
    Git: {
        bg: "#FFE4E1",
        text: "#C0392B",
        darkBg: "#3B1010",
        darkText: "#FCA5A5",
    },
    GitHub: {
        bg: "#F3F4F6",
        text: "#1F2937",
        darkBg: "#1F2937",
        darkText: "#D1D5DB",
    },
    "Node.js": {
        bg: "#DCFCE7",
        text: "#15803D",
        darkBg: "#052E16",
        darkText: "#86EFAC",
    },
    "GitHub REST API": {
        bg: "#F3F4F6",
        text: "#374151",
        darkBg: "#1F2937",
        darkText: "#D1D5DB",
    },
    HTML5: {
        bg: "#FFE4E1",
        text: "#C2410C",
        darkBg: "#3B1200",
        darkText: "#FDBA74",
    },
    CSS3: {
        bg: "#DBEAFE",
        text: "#1E40AF",
        darkBg: "#172554",
        darkText: "#93C5FD",
    },
    "Local Storage": {
        bg: "#ECFDF5",
        text: "#065F46",
        darkBg: "#052E16",
        darkText: "#6EE7B7",
    },
    JSON: {
        bg: "#FEF9C3",
        text: "#78350F",
        darkBg: "#3B2000",
        darkText: "#FDE68A",
    },
};

const DEFAULT_TAG = {
    bg: "#F3F4F6",
    text: "#374151",
    darkBg: "#374151",
    darkText: "#D1D5DB",
};

/* ── useInView ── */
function useInView(threshold = 0.12) {
    const ref = useRef<HTMLDivElement>(null);
    const [visible, setVisible] = useState(false);
    useEffect(() => {
        const el = ref.current;
        if (!el) return;
        const obs = new IntersectionObserver(
            ([e]) => {
                if (e.isIntersecting) {
                    setVisible(true);
                    obs.disconnect();
                }
            },
            { threshold },
        );
        obs.observe(el);
        return () => obs.disconnect();
    }, [threshold]);
    return { ref, visible };
}

/* ── Projects data ── */
const projects = [
    {
        id: 1,
        title: "Billing & Inventory Management System for a Garment Sector",
        category: "Full Stack — Laravel • PHP • MySQL",
        description:
            "A comprehensive web-based billing and inventory management application developed for garment and retail businesses. The system automates billing, stock management, customer handling, employee management, and business reporting to improve operational efficiency and accuracy.",

        image: project4,

        accentColor: "#8B5CF6",

        tags: [
            "Laravel",
            "PHP",
            "MySQL",
            "JavaScript",
            "jQuery",
            "Bootstrap",
            "Git",
            "GitHub",
        ],

        features: [
            "Role-Based Authentication & Authorization",
            "Billing & Invoice Generation",
            "Inventory & Stock Management",
            "Customer Management",
            "Supplier Management",
            "Employee Management",
            "Sales & Purchase Tracking",
            "GST Tax Calculations",
            "Low Stock Alerts",
            "Reporting Dashboard",
            "Automatic Stock Updates",
            "Search & Filter Operations",
            "Sales Reports",
            "Purchase Reports",
        ],

        credentials: [
            {
                role: "Admin",
                email: "[admin@gmail.com]",
                password: "12345678",
            },
        ],

        github: "https://github.com/Gokulk8870/Billing-Web-Application",

        demo: "https://johnsbilling.free.je/",
    },
    {
        id: 2,
        title: "Egg Shop Billing & Inventory Management System",
        category: "Full Stack — Laravel • PHP • MySQL",
        description:
            "A full-stack business management application developed to automate billing, inventory tracking, employee management, and sales reporting processes.",
        image: project1,
        accentColor: "#bdd054",
        tags: [
            "Laravel",
            "PHP",
            "MySQL",
            "JavaScript",
            "jQuery",
            "Bootstrap",
            "Git",
            "GitHub",
        ],
        features: [
            "Role-Based Authentication",
            "Inventory Management",
            "Billing & Invoice Generation",
            "Employee Management",
            "Customer Management",
            "Sales Tracking",
            "Reporting Dashboard",
            "Automatic Stock Updates",
        ],
        credentials: [
            { role: "Admin", email: "admin@gmail.com", password: "12345678" },
            {
                role: "Employee",
                email: "employee@gmail.com",
                password: "12345678",
            },
        ],
        github: "https://github.com/Gokulk8870/eggshop",
        demo: "https://eggshop.onrender.com",
    },

    {
        id: 3,
        title: "Notes Management Application",
        category: "Frontend — HTML5 • CSS3 • JavaScript",
        description:
            "A responsive note-taking application that allows users to create, update, and delete notes with browser-based storage.",
        image: project2,
        accentColor: "#EC4899",
        tags: ["HTML5", "CSS3", "JavaScript", "Local Storage"],
        features: [
            "Create Notes",
            "Edit Notes",
            "Delete Notes",
            "Real-Time UI Updates",
            "Responsive Design",
            "Local Storage Persistence",
        ],
        credentials: [],
        github: null,
        demo: "https://gokulnotes.netlify.app",
    },
    {
        id: 4,
        title: "GitHub Activity Tracker",
        category: "CLI — Node.js • GitHub REST API",
        description:
            "A command-line application that fetches and displays GitHub user activities using the GitHub REST API.",
        image: project3,
        accentColor: "#10B981",
        tags: ["Node.js", "JavaScript", "GitHub REST API", "JSON"],
        features: [
            "API Integration",
            "Async/Await",
            "Event Tracking",
            "JSON Processing",
            "Error Handling",
            "Input Validation",
        ],
        credentials: [],
        github: "https://github.com/Gokulk8870/github-activity",
        demo: null,
    },
];

type Project = (typeof projects)[0];

/* ── Tag chip ── */
const TagChip = ({ tag, large = false }: { tag: string; large?: boolean }) => {
    const c = TAG_COLORS[tag] ?? DEFAULT_TAG;
    return (
        <span
            className={`portfolio-tag ${large ? "px-4 py-2 text-sm" : "px-3 py-1 text-xs"} rounded-full font-semibold`}
            style={
                {
                    "--tag-bg": c.bg,
                    "--tag-text": c.text,
                    "--tag-dark-bg": c.darkBg,
                    "--tag-dark-text": c.darkText,
                } as React.CSSProperties
            }
        >
            {tag}
        </span>
    );
};

/* ── Project Card ── */
const ProjectCard = ({
    project,
    index,
    onClick,
}: {
    project: Project;
    index: number;
    onClick: () => void;
}) => {
    const { ref, visible } = useInView();
    const reduced = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    return (
        <div
            ref={ref}
            className="portfolio-card group cursor-pointer flex flex-col h-full"
            onClick={onClick}
            style={
                reduced
                    ? {}
                    : {
                          opacity: visible ? 1 : 0,
                          transform: visible
                              ? "translateY(0)"
                              : "translateY(28px)",
                          transition: `opacity 0.55s ease ${index * 120}ms, transform 0.55s ease ${index * 120}ms`,
                      }
            }
        >
            {/* Accent top bar */}
            <div
                className="portfolio-card-bar"
                style={{ background: project.accentColor }}
            />

            {/* Image — fixed 16:9 ratio */}
            <div
                className="relative overflow-hidden"
                style={{ aspectRatio: "16/9" }}
            >
                <img
                    src={project.image}
                    alt={project.title}
                    className="portfolio-card-img absolute inset-0 w-full h-full object-cover"
                />
                {/* Overlay */}
                <div className="portfolio-card-overlay absolute inset-0 flex flex-col justify-end p-5">
                    <p className="text-white/80 text-xs font-medium mb-1 uppercase tracking-wide">
                        {project.category}
                    </p>
                    <h3 className="text-white text-base font-bold leading-snug line-clamp-2">
                        {project.title}
                    </h3>
                </div>
            </div>

            {/* Body — flex-grow so all cards stretch to same height */}
            <div className="p-5 flex flex-col flex-1">
                {/* Title */}
                <h3 className="portfolio-card-title font-bold text-base leading-snug mb-2 line-clamp-2">
                    {project.title}
                </h3>
                {/* Description — flex-grow pushes tags to bottom */}
                <p className="portfolio-card-desc text-sm leading-relaxed mb-4 flex-1 line-clamp-3">
                    {project.description}
                </p>
                {/* Tags — always at bottom */}
                <div className="flex flex-wrap gap-1.5 mt-auto">
                    {project.tags.map((tag) => (
                        <TagChip key={tag} tag={tag} />
                    ))}
                </div>
            </div>
        </div>
    );
};

/* ── Dialog tag chip (larger) ── */
const Portfolio = () => {
    const [selected, setSelected] = useState<Project | null>(null);
    const { ref: headRef, visible: headVisible } = useInView(0.2);

    return (
        <section id="portfolio" className="portfolio-section py-28">
            <div className="container mx-auto px-6">
                {/* Heading */}
                <div
                    ref={headRef}
                    className="text-center mb-16"
                    style={{
                        opacity: headVisible ? 1 : 0,
                        transform: headVisible
                            ? "translateY(0)"
                            : "translateY(20px)",
                        transition: "opacity 0.6s ease, transform 0.6s ease",
                    }}
                >
                    <span className="portfolio-label">Portfolio</span>
                    <h2 className="text-4xl md:text-5xl font-bold mt-3 mb-4">
                        My Recent{" "}
                        <span className="portfolio-heading-gradient">Work</span>
                    </h2>
                    <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
                        Explore a selection of projects where creativity meets
                        functionality
                    </p>
                </div>

                {/* Cards */}
                <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto items-stretch">
                    {projects.map((p, i) => (
                        <ProjectCard
                            key={p.id}
                            project={p}
                            index={i}
                            onClick={() => setSelected(p)}
                        />
                    ))}
                </div>
            </div>

            {/* Dialog */}
            <Dialog open={!!selected} onOpenChange={() => setSelected(null)}>
                <DialogContent className="portfolio-dialog max-w-3xl max-h-[90vh] overflow-y-auto rounded-3xl">
                    {selected && (
                        <>
                            <DialogTitle className="text-2xl font-bold mb-1">
                                {selected.title}
                            </DialogTitle>
                            <p
                                className="text-xs font-semibold uppercase tracking-wide mb-4"
                                style={{ color: selected.accentColor }}
                            >
                                {selected.category}
                            </p>
                            <img
                                src={selected.image}
                                alt={selected.title}
                                className="w-full h-64 object-cover rounded-2xl mb-6"
                            />

                            <div className="space-y-5">
                                <p className="text-muted-foreground leading-relaxed">
                                    {selected.description}
                                </p>

                                {selected.credentials.length > 0 && (
                                    <div>
                                        <h4 className="font-semibold mb-3">
                                            🔐 Demo Login Credentials
                                        </h4>
                                        <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                            {selected.credentials.map((c) => (
                                                <div
                                                    key={c.role}
                                                    className="portfolio-cred-card rounded-2xl p-4 space-y-1"
                                                >
                                                    <p
                                                        className="text-sm font-bold"
                                                        style={{
                                                            color: selected.accentColor,
                                                        }}
                                                    >
                                                        {c.role}
                                                    </p>
                                                    <p className="text-sm text-muted-foreground">
                                                        <span className="font-medium text-foreground">
                                                            Email:
                                                        </span>{" "}
                                                        {c.email}
                                                    </p>
                                                    <p className="text-sm text-muted-foreground">
                                                        <span className="font-medium text-foreground">
                                                            Password:
                                                        </span>{" "}
                                                        {c.password}
                                                    </p>
                                                </div>
                                            ))}
                                        </div>
                                    </div>
                                )}

                                <div>
                                    <h4 className="font-semibold mb-2">
                                        Features
                                    </h4>
                                    <ul className="grid grid-cols-2 gap-1.5">
                                        {selected.features.map((f) => (
                                            <li
                                                key={f}
                                                className="text-sm text-muted-foreground flex items-center gap-2"
                                            >
                                                <span
                                                    className="w-1.5 h-1.5 rounded-full inline-block flex-shrink-0"
                                                    style={{
                                                        background:
                                                            selected.accentColor,
                                                    }}
                                                />
                                                {f}
                                            </li>
                                        ))}
                                    </ul>
                                </div>

                                <div>
                                    <h4 className="font-semibold mb-2">
                                        Technologies
                                    </h4>
                                    <div className="flex flex-wrap gap-2">
                                        {selected.tags.map((tag) => (
                                            <TagChip
                                                key={tag}
                                                tag={tag}
                                                large
                                            />
                                        ))}
                                    </div>
                                </div>

                                <div className="flex gap-3 pt-2">
                                    {selected.github && (
                                        <Button
                                            variant="outline"
                                            className="flex-1 rounded-full"
                                            size="lg"
                                            onClick={() =>
                                                window.open(
                                                    selected.github!,
                                                    "_blank",
                                                )
                                            }
                                        >
                                            <Github className="w-4 h-4 mr-2" />{" "}
                                            View Code
                                        </Button>
                                    )}
                                    {selected.demo && (
                                        <Button
                                            className="flex-1 rounded-full bg-primary hover:bg-primary/90 text-primary-foreground"
                                            size="lg"
                                            onClick={() =>
                                                window.open(
                                                    selected.demo!,
                                                    "_blank",
                                                )
                                            }
                                        >
                                            <ExternalLink className="w-4 h-4 mr-2" />{" "}
                                            Live Demo
                                        </Button>
                                    )}
                                </div>
                            </div>
                        </>
                    )}
                </DialogContent>
            </Dialog>

            {/* ── Scoped styles ── */}
            <style>{`
        /* Section */
        .portfolio-section {
          background: hsl(var(--muted) / 0.3);
        }

        /* Label pill */
        .portfolio-label {
          display: inline-block;
          padding: 4px 16px;
          border-radius: 999px;
          font-size: 0.875rem;
          font-weight: 600;
          background: linear-gradient(135deg, #c084fc22, #818cf822);
          color: hsl(var(--primary));
          border: 1px solid hsl(var(--primary) / 0.25);
          letter-spacing: 0.03em;
        }

        /* Heading gradient */
        .portfolio-heading-gradient {
          background: linear-gradient(135deg, #a855f7, #6366f1);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          filter: drop-shadow(0 0 16px rgba(168,85,247,0.3));
        }

        /* ── Card — light ── */
        .portfolio-card {
          border-radius: 1.25rem;
          overflow: hidden;
          background: #ffffff;
          border: 1px solid rgba(139,92,246,0.14);
          box-shadow: 0 4px 20px rgba(0,0,0,0.06), 0 1px 4px rgba(0,0,0,0.04);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .portfolio-card:hover {
          transform: translateY(-8px);
          box-shadow: 0 20px 48px rgba(0,0,0,0.12), 0 4px 12px rgba(139,92,246,0.12);
        }

        /* ── Card — dark ── */
        .dark .portfolio-card {
          background: #1F2937;
          border: 1px solid rgba(255,255,255,0.08);
          box-shadow: 0 4px 24px rgba(0,0,0,0.4), 0 1px 4px rgba(0,0,0,0.3);
        }
        .dark .portfolio-card:hover {
          box-shadow: 0 20px 52px rgba(0,0,0,0.6), 0 0 0 1px rgba(255,255,255,0.1);
        }

        /* Accent bar */
        .portfolio-card-bar {
          height: 4px;
          width: 100%;
        }

        /* Image zoom */
        .portfolio-card-img {
          transition: transform 0.4s ease;
        }
        .portfolio-card:hover .portfolio-card-img {
          transform: scale(1.05);
        }

        /* Overlay — hidden by default, visible on hover */
        .portfolio-card-overlay {
          background: linear-gradient(to top, rgba(0,0,0,0.82) 0%, rgba(0,0,0,0.18) 60%, transparent 100%);
          opacity: 0;
          transition: opacity 0.35s ease;
        }
        .portfolio-card:hover .portfolio-card-overlay {
          opacity: 1;
        }

        /* Card title */
        .portfolio-card-title {
          color: #111827;
        }
        .dark .portfolio-card-title {
          color: #F9FAFB;
        }

        /* Card description text */
        .portfolio-card-desc {
          color: #4B5563;
        }
        .dark .portfolio-card-desc {
          color: #9CA3AF;
        }

        /* Tag chips */
        .portfolio-tag {
          background: var(--tag-bg);
          color: var(--tag-text);
          transition: transform 0.25s ease, box-shadow 0.25s ease;
          cursor: default;
        }
        .portfolio-tag:hover {
          transform: scale(1.05);
          box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }
        .dark .portfolio-tag {
          background: var(--tag-dark-bg);
          color: var(--tag-dark-text);
        }

        /* Dialog */
        .portfolio-dialog {
          background: #ffffff;
          border: 1px solid rgba(139,92,246,0.15);
        }
        .dark .portfolio-dialog {
          background: #111827;
          border: 1px solid rgba(255,255,255,0.08);
        }

        /* Credential card */
        .portfolio-cred-card {
          background: rgba(139,92,246,0.06);
          border: 1px solid rgba(139,92,246,0.2);
        }
        .dark .portfolio-cred-card {
          background: rgba(255,255,255,0.05);
          border: 1px solid rgba(255,255,255,0.1);
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
          .portfolio-card,
          .portfolio-card-img,
          .portfolio-card-overlay,
          .portfolio-tag {
            transition: none !important;
            animation: none !important;
          }
          .portfolio-card:hover {
            transform: none !important;
          }
          .portfolio-card:hover .portfolio-card-img {
            transform: none !important;
          }
        }
      `}</style>
        </section>
    );
};

export default Portfolio;
